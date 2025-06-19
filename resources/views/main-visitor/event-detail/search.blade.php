<div class="shadow-md rounded-lg p-4 space-y-4 sticky top-16 z-[99]">
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
    <h2 class="text-md font-semibold mb-4 text-gray-800 dark:text-white">Event Terdekat</h2>
    {{-- @for ($i = 0; $i < 4; $i++)
                @endfor --}}
    <x-ui.list-event />
</div>
