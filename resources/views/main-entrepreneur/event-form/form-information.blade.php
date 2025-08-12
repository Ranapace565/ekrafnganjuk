<div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
    <div class=" col-span-2">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Event<span
                class="text-red-600">*</span></label>
        <input type="text" name="title" id="title"
            class="md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Web Development & Agriculture" required>
    </div>
    <div class="w-full">
        <label for="sector" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sub
            Sektor</label>
        <x-forms.sector-f required :choose="'Semua Sektor'" />
    </div>
    <div class="col-span-2">
        <label for="datepicker-range-start" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white flex">
            Jadwal Event <span class="text-red-600">*</span>
            <x-ui.popover id="tenaga-kerja" :messages="[
                [
                    'title' => 'Jadwal Event',
                    'desc' => 'Pilih rentan tanggal event, mulai sampai selesai.',
                ],
                [
                    'title' => 'Event Sehari',
                    'desc' => 'Jika event hanya satu hari, dapat memilih 1 tanggal saja',
                ],
            ]">
            </x-ui.popover>
        </label>

        <div id="date-range-picker" date-rangepicker class="xs:flex block items-center ">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input id="datepicker-range-start" name="start_date" type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tanggal Mulai" required>
            </div>
            <span class="mx-4 text-gray-500">sampai</span>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input id="datepicker-range-end" name="end_date" type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tanggal Selesai">
            </div>
        </div>

    </div>

    <div class="col-span-2">
        <label for="cover-photo" class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi
            Event <span class="text-red-600">*</span> <x-ui.popover id="lokasi-Event" :messages="[
                [
                    'title' => 'Lokasi Event',
                    'desc' => 'Pilih titik koordinat di peta, kemudian anda dapat melengkapi informasi di kolom bawah.',
                ],
            ]">
            </x-ui.popover>
        </label>
        <x-forms.maps />

    </div>

    <div class="col-span-2">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
            Event <span class="text-red-600">*</span></label>
        <x-forms.public-tinymce-editor name="description" />
    </div>


    <div class="col-span-2 w-full flex justify-end space-x-2">
        <a type=""
            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-gray-900 dark:text-white hover:text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-red-600">
            Batal
        </a>
        <button type="submit"
            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Simpan
        </button>
    </div>
</div>
