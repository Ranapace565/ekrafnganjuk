<main class="pb-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <div class=" w-full format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">

            <section class="not-format">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Diskusi (20)</h2>
                </div>
                <form class="mb-6">
                    <div
                        class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="6"
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                            placeholder="Tulis comentar..." required></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Unggah
                        </button>
                    </div>
                </form>
                @for ($i = 0; $i < 5; $i++)
                    <div class="border-t border-gray-200">
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
</main>
