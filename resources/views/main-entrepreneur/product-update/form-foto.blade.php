@php
    $MAX_IMAGES = 3;
    $existingImages = $data->images; // koleksi relasi gambar lama
@endphp

<div class="border-b border-gray-900/10 pb-12">
    <i class="dark:text-gray-100 text-sm">
        (<span class="text-red-600">*</span>)Wajib diisi
    </i>

    <div class="mt-10">
        <div class="col-span-full">
            <label for="image-upload" class="mb-2 text-sm font-medium text-gray-900 dark:text-white flex">
                Foto Produk<span class="text-red-600">*</span>
            </label>

            <div class="grid grid-cols-4 gap-4">

                {{-- PREVIEW FOTO LAMA --}}
                <div id="old-preview-container" class="col-span-4 grid grid-cols-3 gap-4 mt-2">
                    @foreach ($existingImages as $img)
                        <div class="relative" id="old-image-{{ $img->id }}">
                            <img src="{{ asset('storage/' . $img->image_path) }}"
                                class="w-full h-40 object-cover rounded-lg shadow">
                            <button type="button"
                                class="absolute top-1 right-1 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm hover:bg-red-700 shadow"
                                onclick="removeOldImage({{ $img->id }})">
                                &times;
                            </button>
                        </div>
                    @endforeach
                </div>

                {{-- PREVIEW FOTO BARU --}}
                <div id="preview-container" class="col-span-4 grid grid-cols-3 gap-4 mt-2"></div>

                {{-- UPLOAD BARU --}}
                <div
                    class="md:col-span-1 col-span-2 mt-2 flex flex-col items-center justify-center rounded-lg border border-dashed border-gray-900/25 dark:border-gray-400 px-6 py-10">
                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                            clip-rule="evenodd" />
                    </svg>

                    <div class="mt-4 text-sm text-gray-600 text-center">
                        <label for="image-upload" id="upload-label"
                            class="cursor-pointer rounded-md bg-white dark:bg-gray-700 px-3 py-2 font-semibold text-primary-500 hover:text-primary-600 ring-1 ring-inset ring-primary-500">
                            Unggah
                        </label>
                        <input id="image-upload" name="images[]" type="file" accept="image/*" multiple hidden
                            onchange="handleFiles(event)">
                        <p class="mt-2 text-xs text-gray-500">
                            PNG, JPG, WEBP sampai 3MB — <span id="quota-text"></span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Hidden untuk daftar id gambar lama yang dihapus --}}
<input type="hidden" id="deleted-images" name="deleted_images">
<script>
    // ===== Konfigurasi =====
    const MAX_IMAGES = {{ $MAX_IMAGES }};
    const EXISTING_COUNT = {{ $existingImages->count() }};
    // option: kirim daftar existing id untuk validasi front-end (tidak wajib)
    const EXISTING_IDS = @json($existingImages->pluck('id'));

    // ===== State =====
    let selectedFiles = []; // foto BARU yang dipilih user
    let deletedImages = []; // id foto LAMA yang dipilih untuk dihapus

    // ===== Util: Hitung total efektif =====
    function getEffectiveCount() {
        // total = foto lama yang tersisa + foto baru yang dipilih
        const remainingOld = EXISTING_COUNT - deletedImages.length;
        return remainingOld + selectedFiles.length;
    }

    function getRemainingQuota() {
        return MAX_IMAGES - getEffectiveCount();
    }

    // ===== UI: Tampilkan sisa kuota & disable upload jika penuh =====
    function updateQuotaUI() {
        const q = getRemainingQuota();
        const quotaText = document.getElementById('quota-text');
        const uploadLabel = document.getElementById('upload-label');

        quotaText.textContent = `Sisa kuota: ${q} foto (maks ${MAX_IMAGES})`;

        if (q <= 0) {
            uploadLabel.classList.add('opacity-50', 'pointer-events-none');
        } else {
            uploadLabel.classList.remove('opacity-50', 'pointer-events-none');
        }
    }

    // ===== FOTO BARU =====
    function handleFiles(event) {
        const incoming = Array.from(event.target.files);
        const maxSize = 3 * 1024 * 1024; // 3MB

        for (const file of incoming) {
            // Stop bila kuota habis
            if (getRemainingQuota() <= 0) {
                alert('Kuota foto sudah maksimal.');
                break;
            }
            // Skip kalau melebihi 3MB
            if (file.size > maxSize) {
                alert(`File "${file.name}" melebihi 3MB.`);
                continue;
            }
            // Skip duplikat (berdasarkan name+size)
            const isDup = selectedFiles.some(f => f.name === file.name && f.size === file.size && f.lastModified ===
                file.lastModified);
            if (isDup) {
                continue;
            }

            selectedFiles.push(file);
        }

        renderPreviews();
        syncInputFiles();

        // reset agar bisa pilih file dengan nama sama lagi di kesempatan berikutnya

        updateQuotaUI();

        // event.target.value = '';
    }

    function removeImage(index) {
        selectedFiles.splice(index, 1);
        renderPreviews();
        syncInputFiles();
        updateQuotaUI();
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

    function syncInputFiles() {
        const dataTransfer = new DataTransfer();
        selectedFiles.forEach(file => dataTransfer.items.add(file));
        document.getElementById('image-upload').files = dataTransfer.files;
    }

    // ===== FOTO LAMA =====
    function removeOldImage(id) {
        // Sembunyikan dari UI
        const el = document.getElementById('old-image-' + id);
        if (el) el.remove();

        // Tambah ke daftar hapus (hindari duplikat)
        if (!deletedImages.includes(id)) {
            deletedImages.push(id);
        }
        document.getElementById('deleted-images').value = JSON.stringify(deletedImages);

        updateQuotaUI();
    }

    // Init kuota saat load
    document.addEventListener('DOMContentLoaded', updateQuotaUI);
</script>
