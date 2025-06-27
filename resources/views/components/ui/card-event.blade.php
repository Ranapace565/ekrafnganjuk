@props([
    'id' => uniqid(),
    'size' => '',
    'detailUrl' => '',
    'editUrl' => '',
    'deleteUrl' => '',
])

<div class="">
    <div
        class=" sm:grid {{ $size }}  grid-cols-12 bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="col-span-4 w-full h-full object-cover"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png" alt="">
        <div class="col-span-8 flex flex-col justify-between p-4 leading-normal">
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
                    class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-800">
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
            <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">
                {{ Str::limit('Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur', 20, '..') }}
            </h5>
            <a href="">
                <span
                    class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    {{ Str::limit('Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.', 10, '..') }}</span>
            </a>
            <a href="">
                <span
                    class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    {{ Str::limit('Jumat, 15 Desember 2025', 15, '...') }}</span>
            </a>

            <div class="flex items-center gap-2 my-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <!-- Pointer Geo -->
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21s7-6.167 7-11a7 7 0 1 0-14 0c0 4.833 7 11 7 11z" />
                    <!-- Titik di tengah -->
                    <circle cx="12" cy="10" r="2" fill="currentColor" />
                </svg>

                <p class="text-xs font-medium text-gray-500 dark:text-gray-400">
                    {{ Str::limit('Lorem ipsum dolor sit amet. Lorem, ipsum dolor.', 20, '...') }}</p>
            </div>
            {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ Str::limit('Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', 60, '...') }}
        </p> --}}
            <div class="flex justify-end">
                <a href="{{ '/event-detail' }}"
                    class="inline-flex items-center text-blue-600 hover:underline dark:text-blue-500 font-medium ">selengkapnya
                    <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.293 15.707a1 1 0 010-1.414L13.586 11H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</div>
