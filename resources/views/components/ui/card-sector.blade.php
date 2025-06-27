@props([
    'id' => uniqid(),
    'size' => '',
    'detailUrl' => '',
    'editUrl' => '',
    'deleteUrl' => '',
    'title' => '',
    'description' => '',
])

<div
    class="flex-shrink-0 p-4 bg-white hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 rounded-2xl shadow-lg flex flex-col  items-center gap-4 transition duration-300 ease-in-out transform hover:scale-105">

    <div class="flex justify-end m-1 w-full">
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
            class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-800 border-gray-200">
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

    <img src="{{ $image ?? 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png' }}"
        alt="{{ Str::limit($title, 20, '...') }}" class="w-20 h-20 object-contain">

    <div class="flex flex-col justify-between w-full">
        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">
            {{ Str::limit($title, 20, '...') }}
        </h3>
        <p class="text-sm text-gray-700 dark:text-gray-300">
            {{ Str::limit($description, 100, '...') }}
        </p>
        <div class="w-full text-right mt-2">
            <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline btn-detail" data-title="s"
                data-description="s" data-image="s">
                Selengkapnya &gt;
            </a>
        </div>
    </div>
</div>
