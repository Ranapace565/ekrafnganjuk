<div class="border-b border-gray-900/10 pb-12">
    <i class="dark:text-gray-100 text-sm">
        (<span class="text-red-600">*</span>)Wajib diisi
    </i>

    <div class="mt-10">
        <div class="col-span-full">
            <label for="image-upload" class="mb-2 text-sm font-medium text-gray-900 dark:text-white flex">
                Foto Produk<span class="text-red-600">*</span>
                <x-ui.popover id="foto-produk" :messages="[
                    [
                        'title' => 'Foto Sampul',
                        'desc' => 'Kosongi foto sampul untuk menggunakan sampul bawaan website.',
                    ],
                ]" />
            </label>

            <div class="grid grid-cols-4 gap-4">

                <!-- Tempat Preview Gambar -->
                <div id="preview-container" class="col-span-4 grid grid-cols-3 gap-4 mt-2"></div>
                <!-- Kotak Upload -->
                <div
                    class="md:col-span-1 col-span-2 mt-2 flex flex-col items-center justify-center rounded-lg border border-dashed border-gray-900/25 dark:border-gray-400 px-6 py-10">
                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                            clip-rule="evenodd" />
                    </svg>

                    <div class="mt-4 text-sm text-gray-600 text-center">
                        <label for="image-upload"
                            class="cursor-pointer rounded-md bg-white dark:bg-gray-700 px-3 py-2 font-semibold text-primary-500 hover:text-primary-600 ring-1 ring-inset ring-primary-500">
                            Unggah
                        </label>
                        <input id="image-upload" name="images[]" type="file" accept="image/*" multiple hidden
                            onchange="handleFiles(event)">
                        <p class="mt-2 text-xs text-gray-500">PNG, JPG, GIF sampai 3MB</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    let selectedFiles = [];

    function handleFiles(event) {
        const newFiles = Array.from(event.target.files);
        const maxFiles = 3;
        const maxSize = 3 * 1024 * 1024; // 3MB

        for (const file of newFiles) {
            if (selectedFiles.length >= maxFiles) {
                alert('Maksimal 3 foto yang diperbolehkan.');
                break;
            }

            if (file.size > maxSize) {
                alert(`File "${file.name}" melebihi ukuran maksimum 3MB dan tidak akan ditambahkan.`);
                continue;
            }

            selectedFiles.push(file);
        }

        renderPreviews();

        // Reset input agar file dengan nama sama bisa dipilih ulang
        event.target.value = '';
    }

    function removeImage(index) {
        selectedFiles.splice(index, 1);
        renderPreviews();
    }

    function renderPreviews() {
        const previewContainer = document.getElementById('preview-container');
        previewContainer.innerHTML = '';

        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const wrapper = document.createElement('div');
                wrapper.classList.add('relative');

                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('w-full', 'h-40', 'object-cover', 'rounded-lg', 'shadow');

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.innerHTML = '&times;';
                removeBtn.classList.add(
                    'absolute', 'top-1', 'right-1', 'bg-red-600', 'text-white', 'rounded-full',
                    'w-6', 'h-6', 'flex', 'items-center', 'justify-center', 'text-sm',
                    'hover:bg-red-700', 'shadow'
                );
                removeBtn.onclick = () => removeImage(index);

                wrapper.appendChild(img);
                wrapper.appendChild(removeBtn);
                previewContainer.appendChild(wrapper);
            };
            reader.readAsDataURL(file);
        });
    }
</script>
