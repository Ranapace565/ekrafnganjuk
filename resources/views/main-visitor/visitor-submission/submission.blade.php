<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white"> Pengajuan Usahamu
        </h2>

        <i class=" dark:text-gray-100 text-sm">(<span class="text-red-600">*</span>)Wajib diisi</i>
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

        @if ($data['note'] != null)
            @include('main-visitor.visitor-submission.note')
        @endif

        <x-forms.validation-notive />

        <form action="{{ route('visitor_logged.business-submission-update', $data->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mt-4 grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Usaha / Komunitas <span class="text-red-600">*</span></label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{ $data['name'] }}" required="" value="{{ $data['name'] }}">
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori
                        <span class="text-red-600">*</span></label>
                    <select id="category" name="category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 scrollbar-custom">
                        <option value="Usaha" {{ $data['category'] == 'Usaha' ? 'selected' : '' }}>Usaha</option>
                        <option value="Perseorangan" {{ $data['category'] == 'Perseorangan' ? 'selected' : '' }}>
                            Perseorangan</option>
                        <option value="Komunitas" {{ $data['category'] == 'Komunitas' ? 'selected' : '' }}>
                            Komunitas</option>
                        <option value="Pendidikan" {{ $data['category'] == 'Pendidikan' ? 'selected' : '' }}>
                            Pendidikan</option>
                    </select>
                </div>
                <div>
                    <label for="sector" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sektor
                        <span class="text-red-600">*</span></label>
                    {{-- <x-forms.sectorF /> --}}
                    <x-forms.sectorF :data="$data['sector_id']" />

                </div>

                <x-forms.district-f :data="$data" />

                <div class="w-full">
                    <label for="manager" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pengelola <span class="text-red-600">*</span></label>
                    <input type="text" name="manager" id="manager"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{ $data['manager'] }}" value="{{ $data['manager'] }}" required="">
                </div>

                <div class="w-full">
                    <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Telp
                        <span class="text-red-600">*</span></label>
                    <input type="number" name="contact" id="contact"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{ $data['contact'] }}" required="" value="{{ $data['contact'] }}">
                </div>

                <div class="col-span-2">
                    <label for="file-upload" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                        Bukti <span class="text-red-600">*</span></label>
                    <x-forms.Img name="proof" :data="$data" />

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
                    <x-forms.maps :data="$data" />
                </div>

                <div class="sm:col-span-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Singkat <span
                            class="text-red-600">*</span></label>
                    <textarea id="description" rows="8" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Masukan deskripsi singkat kreatifitasmu" required>{{ $data['description'] }}</textarea>
                </div>
            </div>
            <div class="w-full flex justify-end space-x-2">
                <a type=""
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-gray-900 dark:text-white hover:text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-red-600">
                    Batal
                </a>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Ajukan Ulang
                </button>
            </div>
        </form>
    </div>
</section>
