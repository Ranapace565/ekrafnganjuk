<div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
    <div class="w-full">
        <a href="#">
            <img class="mx-auto h-32 w-32 rounded-full object-cover"
                src="{{ $image ?? 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png' }}"
                alt="" />
        </a>
    </div>
    <div class="pt-6 flex items-center justify-between flex-col">
        <div class="mb-4 flex items-center justify-between gap-4">
            <span
                class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                sektor </span>
        </div>

        <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Nama
            Usaha</a>
        <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <!-- Pointer Geo -->
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 21s7-6.167 7-11a7 7 0 1 0-14 0c0 4.833 7 11 7 11z" />
                <!-- Titik di tengah -->
                <circle cx="12" cy="10" r="2" fill="currentColor" />
            </svg>

            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Alamat Jalan.</p>
        </div>
        <ul class="mt-2 flex items-center gap-4">
            <a href="">
                <li class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-dots text-gray-500 dark:text-gray-400" viewBox="0 0 16 16">
                        <path
                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        <path
                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                    </svg>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">50</p>
                </li>
            </a>
        </ul>

        <div class="mt-4 flex items-center justify-between gap-4">

            <button type="button"
                class="inline-flex items-center rounded-lg bg-primary-100 px-5 py-2.5 text-sm font-medium text-primary-400 hover:bg-primary-800
                hover:text-white focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-200 
                dark:text-primary-700 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Selengkapnya
            </button>
        </div>
    </div>
</div>
