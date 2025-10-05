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
                <x-forms.img-cover name="icon" :size="'[1/1]'" :required="true" />
            </div>

        </div>
    </div>
</div>
