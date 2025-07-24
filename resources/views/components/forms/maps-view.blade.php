@props(['data' => null])

@php
    $lat = $data['latitude'] ?? '';
    $lng = $data['longitude'] ?? '';
    $location = $data['location'] ?? '';
@endphp

<div id="map" style="height: 400px;" class="w-full rounded-lg overflow-hidden border dark:border-gray-700"></div>

<div class="mt-4 md:w-1/2 space-y-2">
    <div class="w-full">
        <label for="manager" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
        Koordinat 
        </label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            {{ $lat && $lng ? "$lat, $lng" : 'Tidak tersedia' }}
        </p>
    </div>
    <div class="w-full">
        <label for="manager" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
        Koordinat 
        </label>
        <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            {{ $location ?: 'Tidak tersedia' }}
        </p>
    </div>
    {{-- <p class="text-sm text-gray-700 dark:text-gray-200">
        <strong>Koordinat:</strong> {{ $lat && $lng ? "$lat, $lng" : 'Tidak tersedia' }}
    </p>
    <p class="text-sm text-gray-700 dark:text-gray-200">
        <strong>Lokasi:</strong> {{ $location ?: 'Tidak tersedia' }}
    </p> --}}
</div>

<script>
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
    });
</script>
