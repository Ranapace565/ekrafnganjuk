<x-layouts.admin>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 min-h-screen">


        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Pesan Masuk
            <x-ui.popover id="pesan-masuk" :messages="[['title' => 'Pesan Masuk', 'desc' => 'Pesan pembaruan sistem atau pesan pengguna.']]">
            </x-ui.popover>
        </h2>
        @include('main-admin.inbox.search')
        @include('main-admin.inbox.list')
    </div>
</x-layouts.admin>
