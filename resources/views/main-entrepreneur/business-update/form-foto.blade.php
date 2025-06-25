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
                <label for="profile">
                    <svg class="size-52 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </label>
                <input type="file" class="hidden" name="profile" id="profile">
                <label for="profile"
                    class="inline-flex items-center rounded-lg bg-primary-100 px-5 py-2.5 text-sm font-medium text-primary-400 hover:bg-primary-800 hover:text-white focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-200 dark:text-primary-700 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Ubah Logo
                </label>
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
            <div
                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 dark:border-gray-400 px-6 py-10">
                <div class="text-center">
                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    <div class="mt-4 flex justify-center text-sm/6 text-gray-600">
                        <label for="file-upload"
                            class="relative cursor-pointer rounded-md bg-white dark:bg-gray-700 font-semibold text-primary-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-primary-500 focus-within:ring-offset-2 hover:text-primary-500">
                            <span>Unggah Foto</span>
                            <input id="file-upload" name="file-upload" type="file" class="sr-only" />
                        </label>
                    </div>
                    <p class="text-xs/5 text-gray-600">PNG, JPG, GIF sampai 10MB</p>
                </div>
            </div>
        </div>
    </div>
</div>
