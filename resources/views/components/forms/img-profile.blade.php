<div class="flex flex-col items-center space-y-4 relative">
    <!-- Preview Area -->

    <label for="profile" class="cursor-pointer relative">
        <button type="button" id="reset-preview"
            class="absolute hidden top-0 right-0 items-center text-gray-500 hover:text-red-500 dark:text-gray-400 dark:hover:text-red-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div id="preview-container"
            class="size-52 rounded-full overflow-hidden flex items-center justify-center bg-gray-100 relative">

            <!-- Default SVG Icon -->
            <svg id="default-icon" class="size-52 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                    clip-rule="evenodd" />
            </svg>

            <!-- Image preview -->
            <img id="preview-image" class="hidden object-cover size-52" alt="Preview">
        </div>
    </label>

    <!-- File Input -->
    <input type="file" class="hidden" name="profile" id="profile" accept="image/*">

    <!-- Upload Button -->
    {{-- <label for="profile"
        class="inline-flex items-center rounded-lg bg-primary-100 px-5 py-2.5 text-sm font-medium text-primary-400 hover:bg-primary-800 hover:text-white focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-200 dark:text-primary-700 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
        Ubah Logo
    </label> --}}
    <label for="profile"
        class="relative pb-5 text-sm cursor-pointer rounded-md bg-white dark:bg-gray-700 font-semibold text-primary-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-primary-500 focus-within:ring-offset-2 hover:text-primary-500">
        <span>Unggah Logo</span>
    </label>
</div>

<!-- JavaScript for Preview & Reset -->
<script>
    const fileInput = document.getElementById('profile');
    const previewImage = document.getElementById('preview-image');
    const defaultIcon = document.getElementById('default-icon');
    const resetBtn = document.getElementById('reset-preview');

    fileInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.classList.remove('hidden');
                defaultIcon.classList.add('hidden');
                resetBtn.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    });

    resetBtn.addEventListener('click', function() {
        fileInput.value = ''; // Reset input file
        previewImage.src = '';
        previewImage.classList.add('hidden');
        defaultIcon.classList.remove('hidden');
        resetBtn.classList.add('hidden');
    });
</script>
