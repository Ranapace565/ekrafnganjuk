<div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
    <div class=" col-span-2">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk <span
                class="text-red-600">*</span></label>
        <input type="text" name="name" id="name"
            class="md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Nasi Kotak Bu Setyo" required="">
    </div>
    <div class="md:col-span-1 col-span-2">
        <label for="price" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white flex">
            Harga Produk
            <x-ui.popover id="price" :messages="[
                [
                    'title' => 'Harga Produk',
                    'desc' => 'Jika tidak ingin memberi harga pada produk, dapat mengosongi informasi harga',
                ],
            ]">
            </x-ui.popover>
        </label>
        <div class="flex space-x-2">

            <div
                class="flex items-center mt-4 md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">Rp.</div>
                <input type="number" name="price" id="price"
                    class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="5" />
            </div>
        </div>
    </div>
    <div class="col-span-2">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
            Produk</label>
        <x-forms.public-tinymce-editor name="description" />
    </div>


    <div class="col-span-2 w-full flex justify-end space-x-2">
        <a
            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-gray-900 dark:text-white hover:text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-red-600">
            Batal
        </a>
        <button type="submit"
            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Simpan
        </button>
    </div>
</div>
