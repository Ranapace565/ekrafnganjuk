<section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-6 w-full">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mb-4 grid gap-4 md:grid-cols-3 lg:grid-cols-4 xs:grid-cols-2 grid-cols-1">
            @for ($i = 0; $i < 6; $i++)
                <x-ui.card-business/>
            @endfor
        </div>
        <x-ui.pagination />
    </div>

</section>
