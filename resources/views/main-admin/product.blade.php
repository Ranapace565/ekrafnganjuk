<x-layouts.admin>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 min-h-screen">
        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Produk Terdaftar
            <x-ui.popover id="daftar-produk" :messages="[
                [
                    'title' => 'Daftar Produk',
                    'desc' => 'Daftar produk dari semua usaha.',
                ],
            ]">
            </x-ui.popover>
        </h2>
        <i class="dark:text-gray-100 text-sm">
            @include('main-admin.product.search')
            @include('main-admin.product.list')
    </div>
</x-layouts.admin>
