<div class="grid gap-4 sm:grid-cols-2 sm:gap-6 pt-2">
    <div class=" col-span-2">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Artikel<span
                class="text-red-600">*</span></label>
        <input type="text" name="title" id="title"
            class="md:w-3/4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="17 Sektor Ekonomi Kreatif yang Wajib Kamu Ketahui" required="">
    </div>

    <div class=" col-span-2">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Meta</label>
        <input type="text" name="meta_title" id="meta_title"
            class="md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Jika kosong judul meta akan diambil dari judul artikel">
    </div>

    <div class=" col-span-2">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori<span
                class="text-red-600">*</span></label>
        <x-forms.category-f />
    </div>

    <div class=" col-span-2">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tag</label>
        <x-forms.tag-f />

    </div>

    <div class="col-span-2">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konten
            Artikel<span class="text-red-600">*</span></label>
        <x-forms.public-tinymce-editor name="article" />
    </div>

    <div class="col-span-2">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konten
            Meta</label>
        <x-forms.public-tinymce-editor name="article" />
    </div>

    <div class="col-span-2 w-full flex justify-end space-x-2">
        <button type="submit"
            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-gray-900 dark:text-white hover:text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-red-600">
            Batal
        </button>
        <button type="submit"
            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Simpan
        </button>
    </div>
</div>
