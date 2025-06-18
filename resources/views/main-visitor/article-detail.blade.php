<x-layouts.visitor>
    {{-- <x-slot:title>isi</x-slot:title> --}}
    @include('main-visitor.article-detail.page1')

    @include('main-visitor.article-detail.page2')

    @include('main-visitor.article-detail.page3')

    {{-- @include('main-visitor.article-detail.page5') --}}

    {{-- <section class="bg-white dark:bg-gray-900 sm:px-6">
        <div class="grid lg:grid-cols-12 max-w-screen-xl px-4 py-4 mx-auto ">

            <div class="mb-6 lg:mb-0 lg:mt-0 mt-5 lg:col-span-9 flex flex-col justify-center">
                @include('main-visitor.article-detail.page1')

                @include('main-visitor.article-detail.page2')

                @include('main-visitor.article-detail.page3')
            </div>
            <div class="lg:col-span-3 hidden lg:block">
                @include('main-visitor.article-detail.search')
            </div>
        </div>
    </section> --}}

</x-layouts.visitor>
