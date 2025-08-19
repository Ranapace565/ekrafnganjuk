@props([
    'id' => uniqid(),
    'size' => '',
    'detailUrl' => '',
    'editUrl' => '',
    'deleteUrl' => '',
    'title' => '',
    'sector' => '',
    'start_date' => '',
    'end_date' => '',
    'location' => '',
    'poster' => '',
    'status' => '',
])

<div class="">
    <div
        class=" sm:grid {{ $size }}  grid-cols-12 bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="col-span-4 w-full h-full object-cover aspect-[3/4]" src="{{ $poster }}" alt="">
        <div class="col-span-8 flex flex-col justify-between p-4 leading-normal">
            <div class="flex justify-between">
                <x-ui.status :status="$status" />

                <x-ui.button-menu :detailUrl="$detailUrl" :editUrl="$editUrl" :deleteUrl="$deleteUrl" />
            </div>

            <div class="break-words">
                <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ Str::limit($title, 70, '..') }}
                </h5>
            </div>

            <label class="text-sm">
                Sub Sektor :
                <span
                    class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    {{ Str::limit($sector, 20, '..') }}</span>
            </label>
            <label class="text-sm">
                Tanggal :
                <span
                    class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    {{ Str::limit($start_date . '-' . $end_date, 21, '...') }}</span>
            </label>

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
                    {{ Str::limit($location, 40, '...') }}</p>
            </div>

            <div class="flex justify-end">
                <a href="{{ $detailUrl }}"
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
