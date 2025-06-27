<x-layouts.admin>

    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 ">
        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Daftar Pengajuan Event
            <x-ui.popover id="daftar-produk" :messages="[
                [
                    'title' => 'Daftar Pengajuan Event',
                    'desc' => 'Anda dapat mengajukan event tentang ekonomi kreatif di nganjuk.',
                ],
            ]">
            </x-ui.popover>
        </h2>
        @include('main-admin.event-submission.search')
        @include('main-admin.event-submission.list')
    </div>
</x-layouts.admin>
