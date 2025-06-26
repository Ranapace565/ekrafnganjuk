<x-layouts.entrepreneur>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 min-h-screen">


        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Pesan Masuk
            <x-ui.popover id="pesan-masuk" :messages="[['title' => 'Pesan Masuk', 'desc' => 'Produkmu akan ditampilkan di halaman utama usahamu.']]">
            </x-ui.popover>
        </h2>
        @include('main-entrepreneur.inbox.search')
        @include('main-entrepreneur.inbox.list')
    </div>
</x-layouts.entrepreneur>
