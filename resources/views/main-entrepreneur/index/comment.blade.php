<div class="grid lg:grid-cols-2 gap-4 mb-4">
    <div class="flex items-center justify-center rounded-sm bg-gray-50 dark:bg-gray-800">
        <div class=" w-full format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">

            <section class="not-format">
                <div class="flex justify-between items-center mb-6 p-4">
                    <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Ulasan (20)</h2>
                </div>
                @for ($i = 0; $i < 5; $i++)
                    <div class="border-t border-gray-200 m-3">
                        <x-ui.comment id="{{ $i }}" name="Michael Gough" date="2022-02-08"
                            photo="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                            content="Very straight-to-point article. Really worth time reading. Thank you! But tools are just the instruments for the UX designers. The knowledge of the design tools are as important as the creation of the design strategy." />
                        {{-- balasan --}}
                        {{-- <div class="ml-8">
                            <x-ui.comment id="{{ $i }}" name="Michael Gough" date="2022-02-08"
                                photo="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                content="Very straight-to-point article. Really worth time reading. Thank you! But tools are just the instruments for the UX designers. The knowledge of the design tools are as important as the creation of the design strategy." />
                        </div> --}}
                    </div>
                @endfor
            </section>
        </div>
    </div>
    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 1v16M1 9h16" />
            </svg>
        </p>
    </div>
</div>
