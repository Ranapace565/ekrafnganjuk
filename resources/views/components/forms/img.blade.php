@props(['data' => null, 'name'])

@php
    $field = $name;
    $imageUrl = $data && isset($data[$field]) ? asset('storage/' . $data[$field]) : '';
@endphp

<div class="grid md:grid-cols-2 grid-cols-1">
    {{-- Preview upload (md: di atas) --}}
    <div class="relative w-full">
        <img id="preview-image" src="{{ $imageUrl }}" alt="preview gambar"
            class="w-full max-h-64 object-contain border rounded-lg {{ $imageUrl ? '' : 'hidden' }}" />

    </div>

    {{-- File upload --}}
    <div class="relative w-full">
        <label for="file-upload"
            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:text-gray-400">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                        clip-rule="evenodd" />
                </svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                    <span class="font-semibold">Klik untuk upload</span> atau jatuhkan
                </p>
                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF (Maks. 10MB)</p>
            </div>
            <input id="file-upload" name="{{ $name }}" type="file"
                accept="image/png, image/jpeg, image/jpg, image/gif" class="hidden" onchange="previewFile()" required />
        </label>
    </div>
</div>


<script>
    function previewFile() {
        const fileInput = document.getElementById('file-upload');
        const previewImage = document.getElementById('preview-image');
        const file = fileInput.files[0];

        if (file) {
            const allowedTypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
            const maxSize = 10 * 1024 * 1024; // 10MB

            // Validasi jenis file
            if (!allowedTypes.includes(file.type)) {
                alert('Format file tidak didukung. Hanya PNG, JPG, JPEG, dan GIF.');
                fileInput.value = ''; // reset input
                previewImage.classList.add('hidden');
                return;
            }

            // Validasi ukuran file
            if (file.size > maxSize) {
                alert('Ukuran file terlalu besar. Maksimum 10MB.');
                fileInput.value = ''; // reset input
                previewImage.classList.add('hidden');
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }
    }
</script>
