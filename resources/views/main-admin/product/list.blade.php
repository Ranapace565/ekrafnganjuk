<section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-6 w-full">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mb-4 grid gap-4 grid-cols-2 sm:grid-cols-2 md:grid-cols-3 md:mb-8 lg:grid-cols-4 xl:grid-cols-6">
            @for ($i = 0; $i < 12; $i++)
                {{-- <x-ui.card-product /> --}}
                <x-ui.card-product image="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                    title='Apple iMac 27", 1TB HDD, Retina 5K Display, M3 Max' price="1.200.000" detailUrl=""
                    editUrl="" deleteUrl="" />
            @endfor
        </div>
        <x-ui.pagination />
    </div>

</section>
