<x-layouts.entrepreneur>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 min-h-screen">

        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Daftar Produkmu
            <x-ui.popover id="daftar-produk" :messages="[
                [
                    'title' => 'Daftar Produk',
                    'desc' => 'Produk yang kamu tambahkan akan tampil di halaman Ekrafmu.',
                ],
            ]">
            </x-ui.popover>
        </h2>
        @include('main-entrepreneur.product.search')
        @include('main-entrepreneur.product.list')
    </div>
</x-layouts.entrepreneur>
