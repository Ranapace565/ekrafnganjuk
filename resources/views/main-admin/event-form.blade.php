<x-layouts.admin>

    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 min-h-screen">
        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Lembar Event
            <x-ui.popover id="daftar-produk" :messages="[
                [
                    'title' => 'Pengajuan Event',
                    'desc' => 'Anda dapat mengajukan event tentang ekonomi kreatif di nganjuk.',
                ],
            ]">
            </x-ui.popover>
        </h2>
        @include('main-admin.event-form.form-foto')
        @include('main-admin.event-form.form-information')
    </div>
</x-layouts.admin>
