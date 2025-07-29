<section class="py-6 bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto px-4">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Peta Lokasi Usaha</h2>
        <div id="map" class="rounded-lg shadow-md" style="height: 400px; width: 100%;"></div>
    </div>
</section>

{{-- <script>
    const map = L.map('map').setView([-7.599676, 111.904380], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
</script> --}}

<script>
    const map = L.map('map').setView([-7.599676, 111.904380], 11);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const locations = [{
            name: "Usaha A",
            lat: -7.595,
            lng: 111.901
        },
        {
            name: "Usaha B",
            lat: -7.600,
            lng: 111.908
        },
        {
            name: "Usaha C",
            lat: -7.610,
            lng: 111.890
        },
        {
            name: "Usaha D",
            lat: -7.612,
            lng: 111.899
        },
        {
            name: "Usaha E",
            lat: -7.598,
            lng: 111.920
        },
        {
            name: "Usaha F",
            lat: -7.590,
            lng: 111.905
        },
        {
            name: "Usaha G",
            lat: -7.602,
            lng: 111.915
        },
        {
            name: "Usaha H",
            lat: -7.608,
            lng: 111.880
        },
        {
            name: "Usaha I",
            lat: -7.596,
            lng: 111.910
        },
        {
            name: "Usaha J",
            lat: -7.607,
            lng: 111.925
        },
        {
            name: "Usaha K",
            lat: -7.603,
            lng: 111.893
        },
        {
            name: "Usaha L",
            lat: -7.594,
            lng: 111.918
        },
        {
            name: "Usaha M",
            lat: -7.599,
            lng: 111.887
        },
        {
            name: "Usaha N",
            lat: -7.605,
            lng: 111.895
        },
        {
            name: "Usaha O",
            lat: -7.590,
            lng: 111.899
        },
        {
            name: "Usaha P",
            lat: -7.597,
            lng: 111.909
        },
        {
            name: "Usaha Q",
            lat: -7.600,
            lng: 111.899
        }
    ];

    locations.forEach(loc => {
        L.marker([loc.lat, loc.lng])
            .addTo(map)
            .bindPopup(`<strong>${loc.name}</strong>`);
    });
</script>
