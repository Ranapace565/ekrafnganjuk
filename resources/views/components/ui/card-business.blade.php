@props([
    'id' => uniqid(),
    'size' => '',
    'detailUrl' => '',
    'editUrl' => '',
    'deleteUrl' => '',
    'title' => 'Judul Usaha',
    'location' => null,
    'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png',
    'status' => '',
    'sector_id' => '',
    'manager' => null,
    'contact' => null,
])

<div
    class="rounded-lg border border-gray-200 bg-white p-6 shadow-lg dark:border-gray-700 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700">
    <div class="flex justify-between">
        <x-ui.status :status="$status" />

        <x-ui.button-menu :detailUrl="$detailUrl" :editUrl="$editUrl" :deleteUrl="$deleteUrl" />
    </div>
    <div class="w-full">
        <a href="#">
            <img class="mx-auto h-32 w-32 rounded-full object-cover" src="{{ $image }}" alt="" />
        </a>
    </div>
    <div class="pt-6 flex items-center justify-between flex-col">
        <div class="mb-4 flex items-center justify-between gap-1">
            <a href="">
                <span
                    class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    {{ Str::limit($sector_id, 30, '..') }}</span>
            </a>
        </div>

        <a href="#"
            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ Str::limit($title, 20, '...') }}</a>

        {{-- <div class=""> --}}
        @if ($manager != null)
            <div class="flex gap-2">
                👤

                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    {{ Str::limit($manager, 20, '...') }}</p>

            </div>
        @endif
        @if ($contact != null)
            <div class="flex gap-2">
                📞
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    {{ Str::limit($contact, 20, '...') }}</p>
            </div>
        @endif

        @if ($location != null)
            <div class="flex gap-2">
                📍
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    {{ Str::limit($location, 30, '...') }}</p>
            </div>
        @endif
        {{-- </div> --}}

        <div class="mt-4 flex items-center justify-between gap-4">

            <a href="{{ $detailUrl }}"
                class="inline-flex items-center rounded-lg bg-primary-100 px-5 py-2.5 text-sm font-medium text-primary-400 hover:bg-primary-800
                hover:text-white focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-200 
                dark:text-primary-700 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Selengkapnya
            </a>
        </div>
    </div>
</div>
