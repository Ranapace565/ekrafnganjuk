<div class="border-b border-gray-900/10 pb-12">
    <i class="dark:text-gray-100 text-sm">(<span class="text-red-600">*</span>)Wajib diisi</i>

    <div class="mt-10">
        <div>
            <label for="file-upload" class="mb-2 text-sm font-medium text-gray-900 dark:text-white flex">
                Foto Event<span class="text-red-600">*</span>
                <x-ui.popover id="foto-event" :messages="[
                    [
                        'title' => 'Foto Event',
                        'desc' => 'Foto event dapat berupa pamflet, atau poster.',
                    ],
                ]" />
            </label>


            <div class="grid grid-cols-4">

                <x-forms.img-cover name="poster" :size="'aspect-[3/4]'" />
                {{-- <label for="file-upload"
                    class="md:col-span-2 col-span-4 mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 dark:border-gray-400 px-6 py-10 h-96 relative">
                    <div class="text-center" id="upload-area">
                        <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                clip-rule="evenodd" />
                        </svg>

                        <div class="mt-4 flex justify-center text-sm/6 text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer rounded-md bg-white dark:bg-gray-700 font-semibold text-primary-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-primary-500 focus-within:ring-offset-2 hover:text-primary-500">
                                <span>Unggah Foto</span>
                                <input id="file-upload" name="poster" type="file" accept="image/*" class="sr-only"
                                    onchange="previewImage(event)" required />
                            </label>
                        </div>
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF sampai 10MB</p>
                    </div>

                    <!-- Preview Gambar -->
                    <img id="image-preview"
                        class="absolute inset-0 w-full h-full object-contain rounded-lg hidden z-10" />
                </label> --}}
            </div>
        </div>
    </div>
</div>

{{-- <script>
    function previewImage(event) {
        const fileInput = event.target;
        const preview = document.getElementById('image-preview');
        const uploadArea = document.getElementById('upload-area');

        const file = fileInput.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                uploadArea.classList.add('hidden');
            };
            reader.readAsDataURL(file);
        } else {
            alert("Hanya file gambar yang diperbolehkan (PNG, JPG, GIF).");
            fileInput.value = ""; // Clear file
        }
    }
</script> --}}
