<div class="lg:col-span-3 hidden lg:block">
    <div class=" shadow-md rounded-lg p-4 space-y-4 sticky top-16 z-[99]">
        <form class="flex items-center my-4">
            <label for="search" class="sr-only">Cari</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.82 4.82a1 1 0 01-1.42 1.42l-4.82-4.82A6 6 0 012 8z" />
                    </svg>
                </div>
                <input type="text" id="search"
                    class="w-full pl-10 p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Cari berita..." required>
            </div>
        </form>
        <h2 class="text-md font-semibold mb-4 text-gray-800 dark:text-white">Artikel Terbaru</h2>
        @for ($i = 0; $i < 4; $i++)
            <div class=""></div>
        @endfor
        <div class="mt-4">
            <a href="#" title=""
                class="inline-flex items-center text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">
                Temukan informasi lainnya
                <svg aria-hidden="true" class="w-3 h-3 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>
