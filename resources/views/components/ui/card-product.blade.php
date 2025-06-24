{{-- <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
    <div class="flex justify-end">
        <button id="dropdownButton" data-dropdown-toggle="dropdown"
            class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm "
            type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 16 3">
                <path
                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown"
            class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton">
                <li>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Detail</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Ubah</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Hapus</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="h-24 w-full">
        <a href="#">
            <img class="mx-auto h-full dark:hidden"
                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="" />
            <img class="mx-auto hidden h-full dark:block"
                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
        </a>
    </div>
    <div class="pt-6">

        <a href="#"
            class="text-sm font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ Str::limit('Apple iMac 27", 1TB HDD, Retina 5K Display, M3 Max', 30, '...') }}</a>

        <div class="mt-4 block items-center justify-between gap-4">
            <p class=" sm:grid-cols-1 text-xl font-extrabold leading-tight text-gray-900 dark:text-white">
                Rp. {{ Str::limit('1.200.000', 9, '..') }}</p>
        </div>
    </div>
</div> --}}
@props([
    'id' => uniqid(),
    'image' => '',
    'title' => '',
    'price' => '',
    'detailUrl' => '#',
    'editUrl' => '#',
    'deleteUrl' => '#',
])

<div class="rounded-lg border border-gray-200 bg-white p-6 pt-2 shadow-sm dark:border-gray-700 dark:bg-gray-800">
    <div class="flex justify-end m-1">
        <button id="dropdownButton-{{ md5($id) }}" data-dropdown-toggle="dropdown-{{ md5($id) }}"
            class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm"
            type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 16 3">
                <path
                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
            </svg>
        </button>
        <div id="dropdown-{{ md5($id) }}"
            class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton-{{ md5($id) }}">
                <li>
                    <a href="{{ $detailUrl }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Detail</a>
                </li>
                <li>
                    <a href="{{ $editUrl }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Ubah</a>
                </li>
                <li>
                    <a href="{{ $deleteUrl }}"
                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Hapus</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="h-24 w-full ">
        <a href="{{ $detailUrl }}">
            <img class="w-full h-full object-cover" src="{{ $image }}" alt="Product Image" />
        </a>
    </div>

    <div class="pt-6">
        <a href="{{ $detailUrl }}"
            class="text-sm font-semibold leading-tight text-gray-900 hover:underline dark:text-white">
            {{ \Illuminate\Support\Str::limit($title, 30, '...') }}
        </a>

        <div class="mt-4 block items-center justify-between gap-4">
            <p class="sm:grid-cols-1 text-xl font-extrabold leading-tight text-gray-900 dark:text-white">
                Rp. {{ \Illuminate\Support\Str::limit($price, 9, '..') }}
            </p>
        </div>
    </div>
</div>
