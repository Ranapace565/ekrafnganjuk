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
    <script src="https://cdn.tiny.cloud/1/59bgrfn8j96kjio720rnwpwmc6nwi3dc938hvn32lb1hbac7/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            menu: {
                file: {
                    title: 'File',
                    items: 'newdocument restoredraft | preview | importword exportpdf exportword | print | deleteallconversations'
                },
                edit: {
                    title: 'Edit',
                    items: 'undo redo | cut copy paste pastetext | selectall | searchreplace'
                },
                view: {
                    title: 'View',
                    items: 'code revisionhistory | visualaid visualchars visualblocks | spellchecker | preview fullscreen | showcomments'
                },
                insert: {
                    title: 'Insert',
                    items: 'image link media addcomment pageembed codesample inserttable | math | charmap emoticons hr | pagebreak nonbreaking anchor tableofcontents | insertdatetime'
                },
                format: {
                    title: 'Format',
                    items: 'bold italic underline strikethrough superscript subscript codeformat | styles blocks fontfamily fontsize align lineheight | forecolor backcolor | language | removeformat'
                },
                tools: {
                    title: 'Tools',
                    items: 'spellchecker spellcheckerlanguage | a11ycheck code wordcount'
                },
                table: {
                    title: 'Table',
                    items: 'inserttable | cell row column | advtablesort | tableprops deletetable'
                },
                help: {
                    title: 'Help',
                    items: 'help'
                }
            },
            plugins: 'code table lists | image code ',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image',
            images_upload_url: '/upload-image', // route Laravel untuk handle upload
            height: 400,
            automatic_uploads: true,
            images_upload_handler: function(blobInfo, success, failure) {
                let formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());

                fetch('/upload-image', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(result => {
                        if (result.location) {
                            success(result.location); // lokasi URL gambar
                        } else {
                            failure('Upload gagal: tidak ada URL gambar.');
                        }
                    })
                    .catch(error => {
                        failure('Upload error: ' + error.message);
                    });
            }
        });
    </script>

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
