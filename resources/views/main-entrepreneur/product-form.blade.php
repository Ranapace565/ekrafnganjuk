<x-layouts.entrepreneur>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 ">


        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Lembar Tambah Produk
            <x-ui.popover id="daftar-produk" :messages="[['title' => 'Daftar Produk', 'desc' => 'Produkmu akan ditampilkan di halaman utama usahamu.']]">
            </x-ui.popover>
        </h2>
        <form method="POST" action="{{ route('entrepreneur.product.store') }}" enctype="multipart/form-data">
            @csrf
            @include('main-entrepreneur.product-form.form-foto')
            @include('main-entrepreneur.product-form.form-information')
        </form>
    </div>
</x-layouts.entrepreneur>
