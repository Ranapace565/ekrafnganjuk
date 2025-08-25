<div class="border-b border-gray-900/10 pb-12">
    <i class="dark:text-gray-100 text-sm">(<span class="text-red-600">*</span>)Wajib diisi</i>

    <x-forms.validation-notive />

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

                <x-forms.img-cover name="poster" :size="'[3/4]'" />
            </div>
        </div>
    </div>
</div>
