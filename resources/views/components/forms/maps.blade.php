<div id="map" style="height: 400px;" class=""></div>
<div class="col-span-2">
    <input type="text" id="koordinat" name="coordinate"
        class="mt-4 md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="-7.602379657652607, 111.90100602205803" value="" required readonly>

    <input type="hidden" id="latitude" name="latitude" value="" required>
    <input type="hidden" id="longitude" name="longitude" value="" required>

    <input type="text" id="location-name" name="location"
        class="mt-4 md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Nganjuk, East Java, Java, 64414, Indonesia" value="" required>
</div>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        let latInput = document.getElementById('latitude');
        let lngInput = document.getElementById('longitude');
        let koordinatInput = document.getElementById('koordinat');
        let locationInput = document.getElementById('location-name');

        const initialLat = parseFloat(latInput.value) || -7.599676;
        const initialLng = parseFloat(lngInput.value) || 111.904380;

        const map = L.map('map').setView([initialLat, initialLng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        let marker = null;

        // Jika ada koordinat awal, tampilkan marker
        if (latInput.value && lngInput.value) {
            marker = L.marker([initialLat, initialLng]).addTo(map);
        }

        map.on('click', function(e) {
            const lat = e.latlng.lat;
            const lng = e.latlng.lng;

            latInput.value = lat;
            lngInput.value = lng;
            koordinatInput.value = `${lat.toFixed(6)}, ${lng.toFixed(6)}`;

            if (marker) {
                map.removeLayer(marker);
            }
            marker = L.marker([lat, lng]).addTo(map);

            // PENTING: Tambahkan header User-Agent agar tidak diblokir
            fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`, {
                    headers: {
                        'User-Agent': 'MyWebApp (your@email.com)',
                        'Accept': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.display_name) {
                        locationInput.value = data.display_name;
                    } else {
                        locationInput.value = 'Tidak ditemukan';
                    }
                })
                .catch(err => {
                    console.error('Gagal ambil nama lokasi:', err);
                    locationInput.value = 'Gagal memuat nama lokasi';
                });
        });
    });
</script> --}}

<script src="https://unpkg.com/leaflet-pip/leaflet-pip.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let latInput = document.getElementById('latitude');
        let lngInput = document.getElementById('longitude');
        let koordinatInput = document.getElementById('koordinat');
        let locationInput = document.getElementById('location-name');

        const initialLat = parseFloat(latInput.value) || -7.599676;
        const initialLng = parseFloat(lngInput.value) || 111.904380;

        const map = L.map('map').setView([initialLat, initialLng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        let marker = null;

        // Tampilkan marker jika sudah ada koordinat
        if (latInput.value && lngInput.value) {
            marker = L.marker([initialLat, initialLng]).addTo(map);
        }

        // Batas area Kabupaten Nganjuk
        const bounds = {
            north: -7.4500,
            south: -7.7500,
            west: 111.7500,
            east: 112.0000
        };

        let boundaryLayer;

        fetch('/geojson/nganjuk.geojson')
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


        map.on('click', function(e) {
            const lat = e.latlng.lat;
            const lng = e.latlng.lng;
            const latlng = L.latLng(lat, lng); // ← gunakan L.LatLng

            // Validasi jika titik berada di dalam boundary Nganjuk
            if (boundaryLayer && !leafletPip.pointInLayer(latlng, boundaryLayer).length) {
                alert('Lokasi berada di luar batas administratif Kabupaten Nganjuk!');
                return;
            }

            latInput.value = lat;
            lngInput.value = lng;
            koordinatInput.value = `${lat.toFixed(6)}, ${lng.toFixed(6)}`;

            if (marker) {
                map.removeLayer(marker);
            }
            marker = L.marker([lat, lng]).addTo(map);

            // Fetch nama lokasi dari Nominatim
            fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`, {
                    headers: {
                        'User-Agent': 'MyWebApp (your@email.com)',
                        'Accept': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.display_name) {
                        locationInput.value = data.display_name;
                    } else {
                        locationInput.value = 'Tidak ditemukan';
                    }
                })
                .catch(err => {
                    console.error('Gagal ambil nama lokasi:', err);
                    locationInput.value = 'Gagal memuat nama lokasi';
                });
        });
    });
</script>
