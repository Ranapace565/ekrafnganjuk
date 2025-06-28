<x-layouts.admin>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 min-h-screen">
        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Daftar Sektor
            <x-ui.popover id="daftar-sektor" :messages="[
                [
                    'title' => 'Daftar Sektor',
                    'desc' => 'Sektor yang terdaftar akan tampil di halaman utama.',
                ],
                [
                    'title' => 'Menghapus Sektor',
                    'desc' =>
                        'Menghapus sektor akan mempengaruhi data usaha, apabila terdapat sektor yang terhapus akan menyebabkan relasi sektor terhadap usaha akan dipindahkan ke sektor umum.',
                ],
            ]">
            </x-ui.popover>
        </h2>
        @include('main-admin.sector.search')
        @include('main-admin.sector.list')
    </div>
</x-layouts.admin>
