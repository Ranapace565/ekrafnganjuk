<section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-6 w-full">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mb-4 grid gap-4 md:grid-cols-3 lg:grid-cols-4 xs:grid-cols-2 grid-cols-1">
            @for ($i = 0; $i < 6; $i++)
                <x-ui.card-article size=""
                            title="Judul Artikel Kamu Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam velit praesentium dolores aliquam similique unde. Corrupti quo assumenda cum incidunt consequuntur earum. Veritatis!"
                            description="Ini deskripsi singkat dari artikel yang kamu tampilkan. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam velit praesentium dolores aliquam similique unde. Corrupti quo assumenda cum incidunt consequuntur earum. Veritatis!"
                            image="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            link="/artikel-detail" />
            @endfor
        </div>
        <x-ui.pagination />
    </div>

</section>
