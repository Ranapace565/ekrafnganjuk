<div class="border-b border-gray-900/10 pb-12">

    <div class="mt-10">

        <div class="">
            <label for="name" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white flex">
                Icon Sektor<span class="text-red-600">*</span>
                <x-ui.popover id="foto-event" :messages="[
                    [
                        'title' => 'Foto Sampul',
                        'desc' => 'Kosongi foto sampul untuk menggunakan sampul bawaan website.',
                    ],
                ]">
                </x-ui.popover>
            </label>

            <div class="grid grid-cols-4">
                <div
                    class="col-span-2 mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 dark:border-gray-400 px-6 py-10 md:h-96">
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
</div>
