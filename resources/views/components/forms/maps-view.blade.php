@props(['height' => '400px', 'data' => null])

@php
    $lat = $data['latitude'] ?? '';
    $lng = $data['longitude'] ?? '';
    $location = $data['location'] ?? '';
@endphp

<div id="map" style="height:{{ $height }};"
    class="w-full rounded-lg overflow-hidden border dark:border-gray-700"></div>

<div class="mt-4 md:w-1/2 space-y-2">
    <div class="w-full">
        <label for="manager" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
            Koordinat
        </label>
        <p
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            {{ $lat && $lng ? "$lat, $lng" : 'Tidak tersedia' }}
        </p>
    </div>
    <div class="w-full">
        <label for="manager" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
            Koordinat
        </label>
        <p
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            {{ $location ?: 'Tidak tersedia' }}
        </p>
    </div>
</div>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const lat = parseFloat({{ $lat ?: '-7.599676' }});
        const lng = parseFloat({{ $lng ?: '111.904380' }});

        const map = L.map('map').setView([lat, lng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        if (!isNaN(lat) && !isNaN(lng)) {
            L.marker([lat, lng]).addTo(map);
        }

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
    });
</script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const lat = parseFloat('{{ $lat ?: '-7.599676' }}');
        const lng = parseFloat('{{ $lng ?: '111.904380' }}');

        const map = L.map('map').setView([lat, lng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        if (!isNaN(lat) && !isNaN(lng)) {
            let googleMapsUrl = `https://www.google.com/maps?q=${lat},${lng}`;
            let popupContent = `
                <div style="text-align:center;">
                    <a href="${googleMapsUrl}" target="_blank"
                        class="inline-block px-3 py-1  text-white text-sm rounded hover:bg-green-100 transition">
                        📍 Buka di Google Maps
                    </a>
                </div>
            `;

            L.marker([lat, lng])
                .addTo(map)
                .bindPopup(popupContent)
                .openPopup(); // otomatis buka popup saat load
        }

        fetch('/geojson/nganjuk.geojson')
            .then(res => res.json())
            .then(geojson => {
                const boundaryLayer = L.geoJSON(geojson, {
                    style: {
                        color: 'blue',
                        weight: 2,
                        fill: false
                    }
                }).addTo(map);
                map.fitBounds(boundaryLayer.getBounds());
            })
            .catch(err => console.error('Error loading geojson:', err));
    });
</script>
