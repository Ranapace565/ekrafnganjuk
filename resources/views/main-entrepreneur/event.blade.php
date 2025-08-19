<x-layouts.entrepreneur>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 min-h-screen">

        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Daftar Eventmu
            <x-ui.popover id="daftar-produk" :messages="[
                [
                    'title' => 'Daftar Event',
                    'desc' => 'Eventmu yang sudah diterima admin akan ditampilkan di halaman utama.',
                ],
            ]">
            </x-ui.popover>
        </h2>
        @include('main-entrepreneur.event.search')
        @include('main-entrepreneur.event.list')
    </div>
</x-layouts.entrepreneur>
