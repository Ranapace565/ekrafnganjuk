<x-layouts.visitor>
    <section class="bg-white dark:bg-gray-900 sm:px-6">
        <div class="grid max-w-screen-xl px-4 py-4 mx-auto lg:grid-cols-12">
            {{-- side link --}}
            <div class="lg:col-span-3 hidden lg:block">
                <x-search.event-card />
            </div>
            {{--  --}}
            <div class="mb-6 lg:mb-0 lg:mt-0 mt-5 lg:col-span-9 flex flex-col">
                @include('main-visitor.event-detail.body')
            </div>
        </div>
    </section>

    <div class="lg:hidden">
        @include('main-visitor.event-detail.footer')
    </div>

</x-layouts.visitor>
