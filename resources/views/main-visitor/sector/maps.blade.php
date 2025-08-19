<section class="py-6 bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto px-4">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Peta Lokasi Ekraf</h2>

        <div id="map-container" class="">
            <div id="map" class="rounded-lg shadow-md" style="height: 400px; width: 100%;"></div>
        </div>
    </div>
</section>

<script>
    const APP_URL = @json(config('app.url'));
</script>

<script>
    const ekrafs = @json($ekrafs);

    const map = L.map('map').setView([-7.599676, 111.904380], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // mapping sektor -> warna unik
    const sectorColors = {};

    // fungsi generate warna random hex
    function getRandomColor() {
        const letters = "0123456789ABCDEF";
        let color = "#";
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Fungsi buat custom marker warna-warni
    function createColoredMarker(color) {
        return L.divIcon({
            className: "custom-marker",
            html: `
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="41" viewBox="0 0 25 41">
                <path d="M12.5 0C5.6 0 0 5.6 0 12.5C0 21.9 12.5 41 12.5 41C12.5 41 25 21.9 25 12.5C25 5.6 19.4 0 12.5 0Z" fill="${color}"/>
                <circle cx="12.5" cy="12.5" r="5" fill="white"/>
            </svg>
        `,
            iconSize: [25, 41],
            iconAnchor: [12, 41], // titik bawah pas di lokasi
            popupAnchor: [0, -41]
        });
    }

    function shareEkraf(name, location, url) {
        let text = `${name} - ${location}\nLihat detail rute di: ${url}`;

        if (navigator.share) {
            navigator.share({
                title: name,
                text: text,
                url: url
            }).catch(err => console.log('Share dibatalkan', err));
        } else {
            navigator.clipboard.writeText(text).then(() => {
                alert("Link rute berhasil disalin ke clipboard!");
            });
        }
    }

    ekrafs.data.forEach(ekraf => {
        if (ekraf.latitude && ekraf.longitude) {
            // ambil nama sektor
            let sectorName = ekraf.sector ? ekraf.sector.name : "Lainnya";

            // kalau sektor belum punya warna, kasih warna random
            if (!sectorColors[sectorName]) {
                sectorColors[sectorName] = getRandomColor();
            }

            let routeUrl = `${APP_URL}/ekraf/${ekraf.slug}`;

            let googleMapsUrl = `https://www.google.com/maps?q=${ekraf.latitude},${ekraf.longitude}`;
            let popupContent = `
    <div style="text-align:center; min-width:180px;">
        ${ekraf.logo ? `<img src="/storage/${ekraf.logo}" alt="${ekraf.name}" style="width:80px; height:80px; margin:5px auto; object-fit:cover; border-radius:50%; display:block;">` : ''}
        <strong>${ekraf.name}</strong><br>
        ${ekraf.sector ? `<p><em>${ekraf.sector.name}</em></p>` : ''}
        ${ekraf.contact || ekraf.manager ? 
            `<p>📞 ${ekraf.contact ? ekraf.contact : '-'} ${ekraf.manager ? ` | 👤 ${ekraf.manager}` : ''}</p>` 
            : ''}
        ${ekraf.location ? `<p>${ekraf.location}</p>` : ''}

        <a href="/ekraf/${ekraf.slug}" 
        class="btn-detail">
        Detail
        </a>
        <a href="${googleMapsUrl}" target="_blank"
        class="btn-gmaps">
        📍 Google Maps
        </a>

        <button onclick='shareEkraf(${JSON.stringify(ekraf.name)}, ${JSON.stringify(ekraf.location ?? "")}, "${routeUrl}")'
        class="btn-share">
        🔗 Bagikan
        </button>
    </div>
    `;

            // custom marker circle dengan warna sektor
            L.marker([ekraf.latitude, ekraf.longitude], {
                    icon: createColoredMarker(sectorColors[sectorName])
                })
                .addTo(map)
                .bindPopup(popupContent);
        }
    });

    //tunggu semua html selesai load
    document.addEventListener('DOMContentLoaded', async function() {
        console.log('loading maps');

        await fetch('/geojson/nganjuk.geojson')
            .then(res => res.json())
            .then(geojson => {
                boundaryLayer = L.geoJSON(geojson, {
                    style: {
                        color: 'blue',
                        weight: 2,
                        fill: false
                    }
                }).addTo(map);
                map.fitBounds(boundaryLayer.getBounds());
            })
            .catch(err => console.error('Error loading geojson:', err));

        const mapDiv = document.getElementById('map-container');
        mapDiv.classList.remove('hidden');
        console.log('map loaded');
    })
</script>
