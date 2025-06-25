<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <!-- Flowbite CSS (Wajib untuk komponen seperti datepicker) -->

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" /> --}}

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- chart --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>

    {{-- cdn maps --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    {{-- modal --}}
    {{-- <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script> --}}

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    {{-- tanggal --}}
    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <!-- Flowbite Datepicker Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>

    {{-- editor --}}
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'advlist autolink lists link image charmap preview anchor table code',
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | code',
            responsive: true,
            height: 400
        });
    </script> --}}
    {{-- <script src="https://cdn.tiny.cloud/1/59bgrfn8j96kjio720rnwpwmc6nwi3dc938hvn32lb1hbac7/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        var editor_config = {
            path_absolute: "/",
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script> --}}

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
