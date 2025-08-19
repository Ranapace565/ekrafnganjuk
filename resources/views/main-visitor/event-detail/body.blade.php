<section class="bg-white dark:bg-gray-900 sm:px-6">
    <div class="max-w-screen-xl  py-4 mx-auto">

        {{-- tampilan event --}}
        <div class="mb-6 lg:mb-0 lg:mt-0  lg:col-span-9 ">
            <main class=" pb-16  lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                <div class="flex justify-between  mx-auto max-w-screen-xl">
                    <article
                        class="w-full max-w-none format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                        @include('main-visitor.event-detail.header')

                        {!! $data->description !!}
                    </article>
                </div>
            </main>
        </div>
    </div>
</section>
