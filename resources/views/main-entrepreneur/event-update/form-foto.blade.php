<div class="border-b border-gray-900/10 pb-12">
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

    <div class="mt-10">
        <div>
            <label for="file-upload" class="mb-2 text-sm font-medium text-gray-900 dark:text-white flex">
                Foto Event<span class="text-red-600">*</span>
                <x-ui.popover id="foto-event" :messages="[
                    [
                        'title' => 'Foto Event',
                        'desc' => 'Foto event dapat berupa pamflet, atau poster.',
                    ],
                ]" />
            </label>


            <div class="grid grid-cols-4">

                <x-forms.img-cover name="poster" :size="'aspect-[3/4]'" :data="$data" />
            </div>
        </div>
    </div>
</div>
