<x-layouts.admin>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 ">
        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Tambah Sektor
            <x-ui.popover id="tambah-sektor" :messages="[
                [
                    'title' => 'Tambah Sektor',
                    'desc' => 'Menambah sektor ekonomi kreatif.',
                ],
            ]">
            </x-ui.popover>
        </h2>
        <i class="dark:text-gray-100 text-sm">(<span class="text-red-600">*</span>)Wajib diisi</i>
        @include('main-admin.sector-form.form-foto')
        @include('main-admin.sector-form.form-informasi')
    </div>
</x-layouts.admin>
