{{-- <div class="d-flex flex-column w-100 py-7">

    <div class="overflow-x-scroll flex py-4 gap-4 flex-row card px-4 ">
        <x-ui.card-low></x-ui.card-low>
        <x-ui.card-low></x-ui.card-low>
        <x-ui.card-low></x-ui.card-low>
        <x-ui.card-low></x-ui.card-low>
        <x-ui.card-low></x-ui.card-low>
    </div>
</div> --}}

<section id="creativeCenter" class="flex flex-col items-center py-10 bg-gray-50 dark:bg-gray-900 transition-colors">
    <h1 class="mb-10 text-3xl font-bold text-gray-900 dark:text-white">Creative Center</h1>

    <div class="w-full px-4">
        <div class="flex flex-col gap-6 w-full">

            {{-- Card Atas --}}
            <div class="flex flex-row gap-6 overflow-x-auto px-2 py-4 dark:dark scrollbar-custom ">
                @for ($i = 0; $i < 6; $i++)
                    <x-ui.card-low
                        title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio laboriosam, provident, impedit earum saepe aliquam qui corporis totam alias ullam quibusdam culpa quos cupiditate? Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis incidunt quos ratione veritatis facilis excepturi ipsa laudantium ad aperiam rem!"
                        description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio laboriosam, provident, impedit earum saepe aliquam qui corporis totam alias ullam quibusdam culpa quos cupiditate? Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis incidunt quos ratione veritatis facilis excepturi ipsa laudantium ad aperiam rem!"
                        image="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                        link="/detail-artikel" />
                    {{-- <div
                        class="flex-shrink-0 lg:w-[500px] md:w-[500px] w-[300px] p-4 bg-white dark:bg-gray-800 rounded-2xl shadow-lg flex flex-col md:flex-row items-center gap-4 transition-colors">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                            alt="" class="w-20 h-20 object-contain">

                        <div class="flex flex-col justify-between w-full">
                            <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">
                                {{ Str::limit(
                                    'Lorem ipsum dolor sit. Lorem ipsum dolor sit. Loremipsum dolor sit amet consectetur.',
                                    20,
                                    '...',
                                ) }}
                            </h3>
                            <p class="text-sm text-gray-700 dark:text-gray-300">
                                {{ Str::limit(
                                    'Deskripsi lorem ipsum dolor sit Lorem ipsum dolor sit ametconsectetur, adipisicing elit. Nemo deserunt dolorum, nesciunt corporis quasi iste!Culpa, tenetur ut delectus magnam adipisci enim cumque!',
                                    100,
                                    '...',
                                ) }}
                            </p>
                            <div class="w-full text-right mt-2">
                                <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline btn-detail"
                                    data-title="s" data-description="s" data-image="s">
                                    Selengkapnya &gt;
                                </a>
                            </div>
                        </div>
                    </div> --}}
                @endfor
            </div>

            {{-- Card Bawah --}}
            <div class="flex flex-row gap-6 overflow-x-auto px-2 py-4 scrollbar-custom">
                @for ($i = 0; $i < 6; $i++)
                    <x-ui.card-low
                        title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio laboriosam, provident, impedit earum saepe aliquam qui corporis totam alias ullam quibusdam culpa quos cupiditate? Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis incidunt quos ratione veritatis facilis excepturi ipsa laudantium ad aperiam rem!"
                        description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio laboriosam, provident, impedit earum saepe aliquam qui corporis totam alias ullam quibusdam culpa quos cupiditate? Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis incidunt quos ratione veritatis facilis excepturi ipsa laudantium ad aperiam rem!"
                        image="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png"
                        link="/detail-artikel" />
                @endfor
            </div>


        </div>
    </div>


</section>
