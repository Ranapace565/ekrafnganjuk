<aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Berita Terkini</h2>
        <div class="flex flex-row gap-6 overflow-x-auto px-2 pb-6 dark:dark scrollbar-custom ">
            @for ($i = 0; $i < 6; $i++)
                <x-ui.card-article
                    title="Judul Artikel Kamu Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam velit praesentium dolores aliquam similique unde. Corrupti quo assumenda cum incidunt consequuntur earum. Veritatis!"
                    description="Ini deskripsi singkat dari artikel yang kamu tampilkan. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam velit praesentium dolores aliquam similique unde. Corrupti quo assumenda cum incidunt consequuntur earum. Veritatis!"
                    image="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                    link="/detail-artikel" />
            @endfor
        </div>
    </div>
</aside>
