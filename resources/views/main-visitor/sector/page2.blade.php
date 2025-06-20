<section class="py-6 bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto px-4">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Peta Lokasi Usaha</h2>
        <div id="map" class="rounded-lg shadow-md" style="height: 400px; width: 100%;"></div>
    </div>
</section>

{{-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script> --}}

<script>
    const map = L.map('map').setView([-7.599676, 111.904380], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
</script>
