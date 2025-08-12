<section class="py-6 bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto px-4">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Peta Lokasi Ekraf</h2>

        <div id="map-container" class="">
            <div id="map" class="rounded-lg shadow-md" style="height: 400px; width: 100%;"></div>
        </div>
    </div>
</section>

<script>
    const ekrafs = @json($ekrafs);

    const map = L.map('map').setView([-7.599676, 111.904380], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    ekrafs.data.forEach(ekraf => {
        if (ekraf.latitude && ekraf.longitude) {
            L.marker([ekraf.latitude, ekraf.longitude])
                .addTo(map)
                .bindPopup(`<strong>${ekraf.name}</strong><br>${ekraf.location}`);
        }
    });

    //tunggu semua html selesai load
    document.addEventListener('DOMContentLoaded', async function() {
        console.log('loading maps');
        // await setTimeout(async function() {

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
        //}, 3000);
    })

</script>
