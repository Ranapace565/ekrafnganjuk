<div class="border-b border-gray-900/10 pb-12">
    <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Profile Usaha
        <x-ui.popover id="informasi-usaha" :messages="[
            [
                'title' => 'Informasi Usaha',
                'desc' =>
                    'Lengkapi informasi usaha anda untuk keterbacaan informasi yang lebih lengkap di halaman utama.',
            ],
        ]">
        </x-ui.popover>
    </h2>
    <i class="dark:text-gray-100 text-sm">(<span class="text-red-600">*</span>)Wajib diisi</i>

    <x-forms.validation-notive />

    <div class="mb-4 flex items-center  gap-4"> Status :

        <x-ui.status :status="$data['status']" />
        <x-ui.popover id="status-usaha" :messages="[
            [
                'title' => 'Status Aktif',
                'desc' => 'Jika status menunjukan aktif, maka usahamu publik dan dapat dilihat pengguna lain',
            ],
            [
                'title' => 'Status Pengajuan',
                'desc' =>
                    'Jika status menunjukan pengajuan, tunggu beberapa saat hingga admin menerima pengajuanmu, dan usahamu berstatus aktif kembali',
            ],
            [
                'title' => 'Status Ditolak oleh Admin',
                'desc' =>
                    'Jika status menunjukan dinonaktifkan, berarti usahamu tidak dapat dilihat oleh pengguna lain, jadi lakukan update pada data sesuai dengan catatan admin dan klik simpan untuk mengajukan ulang.',
            ],
        ]">
        </x-ui.popover>
    </div>

    @if ($data['note'] != null)
        <x-ui.note :note="$data->note" :id="'note-' . $data->id" />
    @endif

    <div class="mt-10  gap-x-6 gap-y-8 ">

        <div class="col-span-full">
            <div class="mt-2 flex items-center gap-x-3 w-full justify-center flex-col">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Logo Usaha
                </label>
                <x-forms.img-profile name="logo" :data="$data" />
            </div>
        </div>

        <div class="col-span-full">
            <label for="name" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white flex">
                Foto Sampul
                <x-ui.popover id="foto-sampul" :messages="[
                    [
                        'title' => 'Foto Sampul',
                        'desc' => 'Kosongi foto sampul untuk menggunakan sampul bawaan website.',
                    ],
                ]">
                </x-ui.popover>
            </label>
            <x-forms.img-cover :data="$data" name="cover" />
        </div>
    </div>
</div>
