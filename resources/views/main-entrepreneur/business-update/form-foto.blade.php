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

    <div class="mt-10  gap-x-6 gap-y-8 ">

        <div class="col-span-full">
            <div class="mt-2 flex items-center gap-x-3 w-full justify-center flex-col">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Logo Usaha
                </label>
                <x-forms.img-profile />
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
            <x-forms.img-cover />
        </div>
    </div>
</div>
