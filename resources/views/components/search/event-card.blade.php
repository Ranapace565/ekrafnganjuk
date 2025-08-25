<div class="shadow-md rounded-lg p-4 space-y-4 sticky top-16 z-[99]">
    {{-- Form Search --}}
    <form id="event-search-form" class="flex items-center my-4">
        <label for="search" class="sr-only">Cari</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.82 4.82a1 1 0 01-1.42 1.42l-4.82-4.82A6 6 0 012 8z" />
                </svg>
            </div>
            <input type="text" id="search" name="search"
                class="w-full pl-10 p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Cari event..." autocomplete="off">
        </div>
    </form>

    <h2 class="text-md font-semibold mb-4 text-gray-800 dark:text-white">Event Terdekat</h2>

    <div id="section-event" class="w-full max-w-7xl fade-section show">
        <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
            <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
                <ol class="relative border-s border-gray-200 dark:border-gray-700" id="event-list">
                    @forelse ($events->take(3) as $event)
                        <li class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm text-gray-400 dark:text-gray-500">
                                {{ \Carbon\Carbon::createFromFormat('m/d/Y', $event->start_date)->format('d M Y') }}
                            </time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                {{ Str::limit($event->title, 50, '..') }}
                            </h3>

                            <p class="mb-4 text-base text-gray-400 dark:text-gray-400">
                                {!! Str::limit($event->description, 120) !!}
                            </p>
                            <a href="{{ route('event-detail', $event->slug) }}"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                Detail
                                <svg class="w-3 h-3 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </li>
                    @empty
                        <li class="text-gray-500 dark:text-gray-400">Tidak ada event ditemukan.</li>
                    @endforelse
                </ol>

                <div class="max-w-3xl mx-auto text-center mt-4">
                    <a href="{{ route('event') }}"
                        class="inline-flex items-center text-lg font-medium text-primary-600 hover:underline dark:text-primary-500">
                        Lebih banyak event
                        <svg aria-hidden="true" class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('event-search-form');
        const searchInput = document.getElementById('search');
        const eventList = document.getElementById('event-list');

        searchInput.addEventListener('keyup', function() {
            let query = this.value;

            fetch("{{ route('event-detail-search') }}?q=" + query, {
                    headers: {
                        "X-Requested-With": "XMLHttpRequest"
                    }
                })
                .then(res => res.json())
                .then(data => {
                    eventList.innerHTML = "";
                    if (data.length > 0) {
                        data.forEach(event => {
                            eventList.innerHTML += `
                                <li class="mb-10 ms-4">
                                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                    <time class="mb-1 text-sm text-gray-400">${event.date}</time>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">${event.title}</h3>
                                    <p class="mb-4 text-base text-gray-500 dark:text-gray-400">${event.description}</p>
                                    <a href="/event/${event.slug}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        Detail
                                    </a>
                                </li>
                            `;
                        });
                    } else {
                        eventList.innerHTML =
                            `<li class="text-gray-500 dark:text-gray-400">Tidak ada event ditemukan.</li>`;
                    }
                })
                .catch(err => console.error(err));
        });
    });
</script>
