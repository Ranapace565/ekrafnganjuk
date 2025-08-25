<section id="information" class="flex flex-col items-center px-4 py-10 bg-white dark:bg-gray-900">
    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-6 page5-textboxUp">Informasi Buat Kamu
    </h1>

    <!-- Tombol Navigasi -->
    {{-- <div class="flex flex-row gap-4 justify-center mb-8 w-full max-w-xl page5-cardUp">
        <button
            class="w-1/2 text-center py-2 px-4 font-medium text-white border border-gray-300 dark:text-white bg-primary-600 dark:border-gray-600 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none switch-section"
            data-target="Event">
            Event
        </button>
        <button
            class="w-1/2 text-center py-2 px-4 font-medium text-gray-800 border border-gray-300 dark:text-white dark:border-gray-600 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none switch-section"
            data-target="Artikel">
            Artikel
        </button>
    </div> --}}

    <!-- Konten Event -->

    <div id="section-event" class="w-full max-w-7xl fade-section show page5-cardUp13 page5-cardUp13-3">
        <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
            <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">

                <ol class="relative border-s border-gray-200 dark:border-gray-700">
                    @forelse ($events->take(7) as $event)
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

                <div class="max-w-3xl mx-auto text-center">
                    <div class="mt-4">
                        <a href="{{ route('event') }}" title=""
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

    <!-- Konten Artikel -->
    <div id="section-article" class="w-full max-w-7xl fade-section hidden page5-cardUp13-2">
        <div class="flex flex-row gap-6 overflow-x-auto px-2 pb-6 dark:dark scrollbar-custom ">
            @for ($i = 0; $i < 6; $i++)
                <x-ui.card-article size="w-[300px]"
                    title="Judul Artikel Kamu Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam velit praesentium dolores aliquam similique unde. Corrupti quo assumenda cum incidunt consequuntur earum. Veritatis!"
                    description="Ini deskripsi singkat dari artikel yang kamu tampilkan. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam velit praesentium dolores aliquam similique unde. Corrupti quo assumenda cum incidunt consequuntur earum. Veritatis!"
                    image="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                    link="/detail-artikel" />
            @endfor
        </div>
        <div class="max-w-3xl mx-auto text-center">
            <div class="mt-4">
                <a href="#" title=""
                    class="inline-flex items-center text-lg font-medium text-primary-600 hover:underline dark:text-primary-500">
                    Lebih banyak artikel
                    <svg aria-hidden="true" class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    .fade-section {
        transition: opacity 0.3s ease-in-out;
    }
</style>

<script>
    const buttons = document.querySelectorAll('.switch-section');
    const eventSection = document.getElementById('section-event');
    const articleSection = document.getElementById('section-article');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const target = this.dataset.target;

            // Tampilkan/sempunyikan konten sesuai target
            if (target === 'Event') {
                eventSection.classList.remove('hidden');
                articleSection.classList.add('hidden');
            } else if (target === 'Artikel') {
                articleSection.classList.remove('hidden');
                eventSection.classList.add('hidden');
            }

            // Tambahkan styling aktif ke tombol
            buttons.forEach(btn => {
                btn.classList.remove('bg-primary-600', 'text-white');
                btn.classList.add('bg-white', 'text-gray-800', 'border', 'border-gray-300',
                    'dark:bg-gray-800', 'dark:text-white', 'dark:border-gray-600');
            });

            this.classList.add('bg-primary-600', 'text-white');
            this.classList.remove('bg-white', 'text-gray-800', 'border', 'border-gray-300',
                'dark:bg-gray-800', 'dark:text-white', 'dark:border-gray-600');
        });
    });
</script>

{{-- @vite('resources/js/visitor/index/page5.js') --}}
{{-- <script src="resources/js/visitor/index/page5.js"></script> --}}
