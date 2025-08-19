@props(['height' => '400px', 'data' => null])

@php
    $lat = $data['latitude'] ?? '';
    $lng = $data['longitude'] ?? '';
    $location = $data['location'] ?? '';
@endphp

<div id="map" style="height:{{ $height }};"
    class="w-full rounded-lg overflow-hidden border dark:border-gray-700"></div>

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
            let popupContent = `<a href="${googleMapsUrl}" target="_blank"
            class="inline-block px-3 py-1 text-white text-sm rounded hover:bg-green-300 transition">
            📍 Google Maps
        </a>`;

            // Marker dengan popup
            L.marker([lat, lng])
                .addTo(map)
                .bindPopup(popupContent)
                .openPopup(); // bisa dihapus jika tidak mau auto open
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
