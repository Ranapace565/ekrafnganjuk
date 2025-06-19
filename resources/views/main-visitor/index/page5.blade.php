<section id="information" class="flex flex-col items-center px-4 py-10 bg-white dark:bg-gray-900">
    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-6">Informasi Buat Kamu</h1>

    <!-- Tombol Navigasi -->
    <div class="flex flex-row gap-4 justify-center mb-8 w-full max-w-xl">
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
    </div>

    <!-- Konten Event -->

    <div id="section-event" class="w-full max-w-7xl fade-section show">
        <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
            <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">

                <ol class="relative border-s border-gray-200 dark:border-gray-700">
                    @for ($i = 0; $i < 6; $i++)
                        <li class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time
                                class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February
                                2022</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in
                                Tailwind
                                CSS</h3>
                            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over
                                20+
                                pages including a dashboard layout, charts, kanban board, calendar, and pre-order
                                E-commerce
                                & Marketing pages.</p>
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn
                                more <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg></a>
                        </li>
                    @endfor
                </ol>


                {{-- @for ($i = 0; $i < 6; $i++)
                    <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                        <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                            08:00 - 09:00
                        </p>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            <a href="#"
                                class="hover:underline hover:text-primary-600">{{ Str::limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. At corrupti mollitia esse in, ad earum. Nisi dolor fugiat corrupti omnis iste et qui!', 50, '...') }}</a>
                        </h3>
                    </div>
                @endfor --}}
                <div class="max-w-3xl mx-auto text-center">
                    <div class="mt-4">
                        <a href="#" title=""
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
    <div id="section-article" class="w-full max-w-7xl fade-section hidden">
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
