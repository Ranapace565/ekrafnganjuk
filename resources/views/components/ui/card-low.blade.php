@props([
    'id' => uniqid(),
    'size' => 'lg:w-[500px] md:w-[500px] w-[300px]',
    'detailUrl' => '',
    'editUrl' => '',
    'deleteUrl' => '',
    'title' => '',
    'icon' => '',
    'description' => '',
])

{{-- <div
    class="flex-shrink-0 {{ $size }} p-4 bg-white dark:bg-gray-800 rounded-2xl shadow-lg flex flex-col md:flex-row items-center gap-4 transition duration-300 ease-in-out transform hover:scale-105"> --}}
{{-- <div
    class="md:grid {{ $size }}  grid-cols-12 bg-white border border-gray-200 rounded-lg shadow-sm md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-2"> --}}
<div
    class="flex-shrink-0  {{ $size }} flex flex-col  transition-colors bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-hidden">

    <div
        class="md:grid {{ $size }}  grid-cols-12 bg-white border border-gray-200 rounded-lg shadow-sm md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-2">
        <div class="col-span-2 flex justify-center m-2">
            <img src="{{ asset('storage/' . $icon) ?? asset('img/Logo/logo_kreasikan.svg') }}"
                alt="{{ Str::limit($title, 20, '...') }}" class="w-20 h-20 object-contain aspect-[1/1]">
        </div>

        <div class="flex flex-col justify-between w-full col-span-10">
            <div class="flex justify-end">
                <x-ui.button-menu :detailUrl="$detailUrl" :editUrl="$editUrl" :deleteUrl="$deleteUrl" />
            </div>
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">
                {{ Str::limit($title, 20, '...') }}
            </h3>
            <p class="text-sm text-gray-700 dark:text-gray-300">
                {{ Str::limit(strip_tags($description), 100, '...') }}

            </p>
            {{-- <div class="w-full text-right mt-2">
            <a href="{{ $detailUrl }}" class="text-blue-600 dark:text-blue-400 hover:underline btn-detail"
                data-title="s" data-description="s" data-image="s">
                Selengkapnya
            </a>
        </div> --}}
        </div>
    </div>
</div>
