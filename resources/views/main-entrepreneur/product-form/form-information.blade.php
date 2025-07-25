<div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
    <div class=" col-span-2">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk <span
                class="text-red-600">*</span></label>
        <input type="text" name="name" id="name"
            class="md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Web Development & Agriculture" required="">
    </div>
    <div class="md:col-span-1 col-span-2">
        <label for="name" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white flex">
            Harga Produk
            <x-ui.popover id="tenaga-kerja" :messages="[
                [
                    'title' => 'Harga Produk',
                    'desc' =>
                        'Tidak akan ditampilkan di halaman utama, Harga Produk hanya akan digunakan untuk rekap dinas.',
                ],
            ]">
            </x-ui.popover>
        </label>
        <div class="flex space-x-2">

            <div
                class="flex items-center mt-4 md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">Rp.</div>
                <input type="number" name="username" id="username"
                    class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="5" />
            </div>
        </div>
    </div>
    <div class="col-span-2">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
            Produk</label>
        <textarea id="description" rows="8"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Your description here"></textarea>
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
