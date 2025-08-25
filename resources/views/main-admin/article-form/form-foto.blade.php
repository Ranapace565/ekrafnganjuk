<div class="border-b border-gray-900/10 pb-12">

    <i class="dark:text-gray-100 text-sm">(<span class="text-red-600">*</span>)Wajib diisi</i>

    <div class="mt-10">

        <div class="">
            <label for="name" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white flex">
                Sampul Artikel<span class="text-red-600">*</span>
                <x-ui.popover id="tumbnail-article" :messages="[
                    [
                        'title' => 'Sampul Artikel',
                        'desc' => 'Kosongi foto sampul untuk menggunakan sampul bawaan website.',
                    ],
                ]">
                </x-ui.popover>
            </label>

            <div class="grid grid-cols-2">
                <x-forms.img-cover name="thumbnail" :size="'[16/9]'" />
            </div>
        </div>
    </div>
</div>
