<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- chart --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>

    {{-- cdn maps --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />


    {{-- modal --}}
    {{-- <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script> --}}

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    {{-- efek scrollbar card-low --}}
    <style>
        .scrollbar-custom::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }

        .scrollbar-custom::-webkit-scrollbar-track {
            background: transparent;
            border-radius: 100vh;
        }

        .scrollbar-custom::-webkit-scrollbar-thumb {
            background-color: transparent;
            border-radius: 100vh;
            transition: background-color 4.8s ease-in;
        }

        .scrollbar-custom:hover::-webkit-scrollbar-thumb {
            background-color: #888;
            transition: background-color 0.6s ease-in-out;
        }

        .scrollbar-custom::-webkit-scrollbar-thumb:hover {
            background-color: #444;
        }

        .scrollbar-custom {
            scroll-behavior: smooth;
        }
    </style>

    {{ $slot }}
</head>
