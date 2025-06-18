<section class="py-6 bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto px-4">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Usaha Terdaftar

        </h2>
        <div class="mb-4 grid gap-4 md:mb-8 md:grid-cols-3 lg:grid-cols-4 xs:grid-cols-2 grid-cols-1">
            @for ($i = 0; $i < 12; $i++)
                <x-ui.card-business>

                </x-ui.card-business>
            @endfor
        </div>
        <x-ui.pagination />
    </div>
</section>
