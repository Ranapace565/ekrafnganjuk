<x-layouts.visitor>
    <section class="bg-white dark:bg-gray-900 sm:px-6">
        <div class="grid max-w-screen-xl px-4 py-4 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
            @include('main-visitor.event.search')

            @include('main-visitor.event.list')
        </div>
    </section>
</x-layouts.visitor>
