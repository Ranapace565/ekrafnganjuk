<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>safas</title>

    {{-- @vite('resources/css/app.css')

    @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    {{-- <link rel="stylesheet" href="/build/assets/app-yHk7XlFd.css">
    <script src="/build/assets/app-T1DpEqax.js"></script> --}}


    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <!-- Flowbite CSS (Wajib untuk komponen seperti datepicker) -->

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" /> --}}

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- chart --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>

    {{-- cdn maps --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />



    {{-- modal --}}
    {{-- <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script> --}}

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    {{-- tanggal --}}
    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <!-- Flowbite Datepicker Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>

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
