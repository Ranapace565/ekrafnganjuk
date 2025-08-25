@props(['data' => null, 'name', 'size' => '', 'required' => null])

{{-- @php
    $coverUrl = $data && isset($data['cover']) ? asset('storage/' . $data['cover']) : '';
@endphp --}}

@php
    $field = $name;
    $coverUrl = $data && isset($data[$field]) ? asset('storage/' . $data[$field]) : '';
@endphp

<div class="mt-4 relative">
    <div
        class="rounded-lg border border-dashed border-gray-900/25 dark:border-gray-400 overflow-hidden bg-gray-100 aspect-{{ $size }} flex items-center justify-center relative">

        <!-- Tombol Hapus (X) -->
        <button type="button" id="reset-cover"
            class="absolute top-2 right-2 bg-white border border-gray-300 rounded-full p-1 text-gray-500 hover:text-red-600 hover:border-red-400 {{ $coverUrl ? '' : 'hidden' }} z-10"
            title="Hapus gambar">
            &times;
        </button>

        <!-- Preview Gambar -->
        <img id="cover-preview" class="{{ $coverUrl ? 'w-full h-full object-cover' : 'hidden' }}" src="{{ $coverUrl }}"
            alt="Preview Spanduk">

        <!-- Placeholder (SVG Icon) -->
        <div id="cover-placeholder" class="{{ $coverUrl ? 'hidden' : '' }} text-center">
            <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                    clip-rule="evenodd" />
            </svg>
            <p class="mt-2 text-sm text-gray-600">'gambar {{ $size }}'</p>
            <p class="mt-2 text-sm text-gray-600">PNG, JPG, atau GIF hingga 5MB</p>
        </div>
    </div>

    <!-- Input File -->
    <div class="mt-2 flex justify-center text-sm text-gray-600">
        <label for="cover-upload"
            class="relative cursor-pointer rounded-md bg-white dark:bg-gray-700 font-semibold text-primary-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-primary-500 focus-within:ring-offset-2 hover:text-primary-500">
            <span>Unggah {{ $name }}</span>
            <input id="cover-upload" name="{{ $name }}" type="file" accept="image/*" class="sr-only"
                @if ($required != null) required @endif>

            <input type="hidden" name="remove_cover" id="remove-cover-flag" value="0">

        </label>
    </div>
</div>

<!-- Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('cover-upload');
        const preview = document.getElementById('cover-preview');
        const placeholder = document.getElementById('cover-placeholder');
        const resetBtn = document.getElementById('reset-cover');

        input.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                    resetBtn.classList.remove('hidden');
                };

                document.getElementById('remove-cover-flag').value = '0';
                reader.readAsDataURL(file);
            }
        });

        resetBtn.addEventListener('click', function() {
            input.value = '';
            preview.src = '';
            preview.classList.add('hidden');
            placeholder.classList.remove('hidden');
            resetBtn.classList.add('hidden');

            document.getElementById('remove-cover-flag').value = '1';
        });
    });
</script>
