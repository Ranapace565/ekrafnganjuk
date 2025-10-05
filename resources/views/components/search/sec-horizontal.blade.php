@props([
    'sectors' => '',
    'selectedSector' => null,
])
<div class="flex overflow-x-auto gap-4 py-4 px-2 scrollbar-custom">
    <a href="{{ request()->fullUrlWithoutQuery('sector_id') }}"
        class="flex-shrink-0 text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none 
        focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-gray-800 dark:text-white 
        dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
        Semua Sektor
    </a>
    @foreach ($sectors as $sector)
        <a href="{{ request()->fullUrlWithQuery(['sector_id' => $sector->id]) }}"
            class="flex-shrink-0 text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none 
        focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-gray-800 dark:text-white 
        dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 ">
            {{-- {{ $selectedSector == $sector->id ? 'bg-gray-100 dark:bg-gray-600' : '' }} --}}
            {{ $sector->name }}
        </a>
    @endforeach

</div>
