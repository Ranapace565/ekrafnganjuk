<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<textarea id="myeditorinstance">Hello, World!</textarea>
<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance',
        height: 600,
        menubar: true,
        plugins: `
      advlist anchor autolink autoresize autosave charmap code codesample
      directionality emoticons fullscreen help hr image importcss insertdatetime
      link lists nonbreaking pagebreak paste preview print save searchreplace
      table template visualblocks visualchars wordcount
    `,
        toolbar: `
      undo redo | blocks | fontfamily fontsize | bold italic underline strikethrough |
      forecolor backcolor | link image media | alignleft aligncenter alignright alignjustify |
      outdent indent | numlist bullist | emoticons charmap | fullscreen preview code help
    `,
        relative_urls: false,
        remove_script_host: false,
        document_base_url: "{{ config('app.url') }}/",

        file_picker_callback: function(callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document
                .getElementsByTagName('body')[100].clientWidth;
            let y = window.innerHeight || document.documentElement.clientHeight || document
                .getElementsByTagName('body')[100].clientHeight;

            let cmsURL = '{{ route('unisharp.lfm.show') }}?editor=' + meta.fieldname;

            if (meta.filetype === 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinymce.activeEditor.windowManager.openUrl({
                url: cmsURL,
                title: 'File Manager Ekraf Nganjuk',
                width: x * 0.5,
                height: y * 0.8,
                resizable: true,
                close_previous: false,
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });

            setTimeout(() => {
                const dialog = document.querySelector('.tox-dialog');
                if (dialog) {
                    dialog.style.marginTop = '80px'; // atur sesuai tinggi navbar Anda
                }
            }, 500);
        }
    });
</script>
<Style>
    .tox-dialog {
        margin-top: 80px !important;
        /* atau sesuai tinggi navbar Anda */
    }
</Style>
