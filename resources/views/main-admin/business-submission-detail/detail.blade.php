<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white"> Pengajuan :{{ $data['name'] }}
        </h2>

        <div class="mb-4 flex items-center  gap-4"> Status Pengajuan :
            @if ($data['status'] == 0)
                <span
                    class="me-2 rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">
                    Ditolak</span>
            @elseif ($data['status'] == 1)
                <span
                    class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    Diajuan</span>
            @endif
        </div>

        {{-- @if ($data['note'] != null)
            @include('main-visitor.visitor-submission.note')
        @endif --}}

        <x-forms.validation-notive />

        <div class="mt-4 grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Nama Usaha</label>
                <p
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    {{ $data['name'] }}
                </p>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori
                </label>
                <p
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    {{ $data['category'] }}
                </p>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="sector" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sektor
                </label>
                <p
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    {{ $data->sector->name }}
                </p>

            </div>

            <div class="col-span-2 sm:col-span-1">
                <label for="sector" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan
                </label>
                <p
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    {{ $data->district->name }}
                </p>

            </div>

            <div class="col-span-2 sm:col-span-1">
                <label for="sector" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desa /
                    Kelurahan
                </label>
                <p
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    {{ $data->village->name }}
                </p>

            </div>

            <div class="col-span-2 sm:col-span-1">
                <label for="manager" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Pengelola </label>
                <p
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    {{ $data['manager'] }}
                </p>
            </div>

            <div class="col-span-2 sm:col-span-1">
                <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Telp
                </label>
                <p
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    {{ $data['contact'] }}
                </p>
            </div>

            <div class="col-span-2">
                <label for="file-upload" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                    Bukti </label>
                <div class="relative w-full">
                    <img id="preview-image" src="{{ asset('storage/' . $data['proof']) }}" alt="preview gambar"
                        class="w-full max-h-64 object-contain border rounded-lg" />

                </div>

                <div class="col-span-2">
                    <label for="location" class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi

                    </label>
                    <x-forms.maps-view :data="$data" />
                </div>

            </div>

            @include('main-admin.business-submission-detail.form-reject')
        </div>
</section>
