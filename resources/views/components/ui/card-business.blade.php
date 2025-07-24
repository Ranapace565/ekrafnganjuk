@props([
    'id' => uniqid(),
    'size' => '',
    'detailUrl' => '',
    'editUrl' => '',
    'deleteUrl' => '',
    'title' => 'Judul Usaha',
    'location' => 'Lokasi Usaha',
    'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png',
    'status' => '',
    'sector_id' => '',
    'manager' => 'Penanggung jawab',
    'contact' => '0867',
])

<div
    class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700">
    <div class="flex justify-between">
        <a href="">
            @if ($status == 1)
                <span
                    class="me-2 rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300">
                    {{ Str::limit('Pengajuan', 10, '..') }}</span>
            @else
                <span
                    class="me-2 rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">
                    {{ Str::limit('Ditolak', 10, '..') }}</span>
            @endif

        </a>
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

        <div class="">
            <div class="flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                </svg>

                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    {{ Str::limit($manager, 20, '...') }}</p>
            </div>
            <div class="flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708" />
                </svg>

                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    {{ Str::limit($contact, 20, '...') }}</p>
            </div>
            <div class="flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <!-- Pointer Geo -->
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21s7-6.167 7-11a7 7 0 1 0-14 0c0 4.833 7 11 7 11z" />
                    <!-- Titik di tengah -->
                    <circle cx="12" cy="10" r="2" fill="currentColor" />
                </svg>

                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    {{ Str::limit($location, 30, '...') }}</p>
            </div>
        </div>

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
