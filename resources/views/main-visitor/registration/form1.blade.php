<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Daftarkan Kreatifitasmu</h2>
        <i class=" dark:text-gray-100 text-sm">(<span class="text-red-600">*</span>)Wajib diisi</i>
        <x-forms.validation-notive />
        <form action="{{ route('visitor_logged.business-submission') }}"method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4 grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nama Usaha / Komunitas <span class="text-red-600">*</span></label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Komunitas ekonomi kreatif" required="">
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori
                        <span class="text-red-600">*</span></label>
                    <select id="category" name="category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="Usaha">Usaha</option>
                        <option value="Perseorangan">Perseorangan</option>
                        <option value="Komunitas">Komunitas</option>
                        <option value="Pendidikan">Pendidikan</option>
                    </select>
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sektor
                        <span class="text-red-600">*</span></label>
                    <x-forms.sectorF />
                </div>

                <x-forms.district-f />

                <div class="w-full">
                    <label for="manager" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pengelola <span class="text-red-600">*</span></label>
                    <input type="text" name="manager" id="manager"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Soedirman" required="">
                </div>

                <div class="w-full">
                    <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Telp
                        <span class="text-red-600">*</span></label>
                    <input type="number" name="contact" id="contact"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="088899997777" required="">
                </div>

                <div class="col-span-2">
                    <label for="file-upload" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                        Bukti <span class="text-red-600">*</span></label>
                    <x-forms.Img name="proof" />

                </div>

                <div class="col-span-2">
                    <label for="location"
                        class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi<span
                            class="text-red-600">*</span> <x-ui.popover id="lokasi-usaha" :messages="[
                                [
                                    'title' => 'Lokasi Usaha',
                                    'desc' =>
                                        'Pilih titik koordinat di peta, kemudian anda dapat melengkapi informasi di kolom bawah.',
                                ],
                            ]">
                        </x-ui.popover>
                    </label>
                    <x-forms.maps />
                </div>

                <div class="sm:col-span-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Singkat <span
                            class="text-red-600">*</span></label>
                    <textarea id="description" rows="8" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Masukan deskripsi singkat kreatifitasmu" required></textarea>
                </div>
            </div>
            <div class="w-full flex justify-end space-x-2">
                <a type=""
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-gray-900 dark:text-white hover:text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-red-600">
                    Batal
                </a>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Daftarkan
                </button>
            </div>
        </form>
    </div>
</section>
