<header class="mb-4 lg:mb-6 not-format">



    <div class="grid md:grid-cols-2 my-4 gap-4">

        <x-ui.maps-view :height="'200px'" :data="$data" />

        <address class="flex items-center mb-6 not-italic">
            <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">

                <div class="flex flex-col">
                    <div class="flex space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 dark:text-gray-400"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <!-- Pointer Geo -->
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21s7-6.167 7-11a7 7 0 1 0-14 0c0 4.833 7 11 7 11z" />
                            <!-- Titik di tengah -->
                            <circle cx="12" cy="10" r="2" fill="currentColor" />
                        </svg>
                        <p class="text-base text-gray-500 dark:text-gray-400">
                            Lokasi :
                            <time pubdate datetime="2022-02-08" title="February 8th, 2022">{{ $data->location }}</time>
                        </p>
                    </div>
                    <div class="flex space-x-4"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <!-- Icon Kalender -->
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="text-base text-gray-500 dark:text-gray-400">
                            Tanggal :
                            <time pubdate datetime="2022-02-08"
                                title="February 8th, 2022">{{ $data->start_date . ' - ' . $data->end_date }}</time>
                        </p>
                    </div>

                </div>
            </div>
        </address>
    </div>

    <div id="comment-preview-">
        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
            {!! Str::limit($data->title, 70, '') !!}

            @if (Str::length($data->title) > 200)
                <span id="dots-">...</span>
                <span id="more-" class="hidden">
                    {{ Str::substr($data->title, 200) }}
                </span>
                <button onclick="toggleReadMore('', this)" class="text-blue-600 hover:underline text-sm ml-1">
                    Baca selengkapnya
                </button>
            @endif
        </h1>
    </div>


    <div class=" flex lg:max-h-md w-full justify-center">
        <img class="col-span-4 w-full h-full object-cover aspect-[3/4] lg:max-w-sm"
            src="{{ asset('storage/' . $data->poster) }}" alt="">
    </div>

</header>


@once
    <script>
        function toggleReadMore(id, el) {
            const moreText = document.getElementById('more-');
            const dots = document.getElementById('dots-');

            if (moreText.classList.contains('hidden')) {
                moreText.classList.remove('hidden');
                dots.classList.add('hidden');
                el.textContent = 'Sembunyikan';
            } else {
                moreText.classList.add('hidden');
                dots.classList.remove('hidden');
                el.textContent = 'Baca selengkapnya';
            }
        }
    </script>
@endonce
