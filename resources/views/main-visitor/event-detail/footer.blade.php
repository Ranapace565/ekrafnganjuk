<aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Event Terdekat</h2>
        <div class="flex flex-row gap-6 overflow-x-auto px-2 pb-6 dark:dark scrollbar-custom ">
            @for ($i = 0; $i < 6; $i++)
                <x-ui.card-event size="w-[500px]" />
            @endfor
        </div>
    </div>
</aside>
