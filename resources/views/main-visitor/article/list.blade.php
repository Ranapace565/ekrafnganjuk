<div class="mb-6 lg:mb-0 lg:mt-0 mt-5 lg:col-span-9 flex flex-col justify-center">
    <div class=" w-full flex-none ">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Artikel</h2>
        <div class="mb-4 grid gap-4 md:mb-8 md:grid-cols-3 xs:grid-cols-2 grid-cols-1">
            @for ($i = 0; $i < 9; $i++)
                <x-ui.card-article size=""
                    title="Judul Artikel Kamu Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam velit praesentium dolores aliquam similique unde. Corrupti quo assumenda cum incidunt consequuntur earum. Veritatis!"
                    description="Ini deskripsi singkat dari artikel yang kamu tampilkan. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam velit praesentium dolores aliquam similique unde. Corrupti quo assumenda cum incidunt consequuntur earum. Veritatis!"
                    image="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                    link="/artikel-detail" />
            @endfor
        </div>
        <x-ui.pagination />
    </div>
</div>
