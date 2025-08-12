<section class="py-6 bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto px-4">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Usaha Terdaftar

        </h2>
        <div class="mb-4 grid gap-4 md:mb-8 md:grid-cols-3 lg:grid-cols-4 xs:grid-cols-2 grid-cols-1">
            @if ($ekrafs != null)
                @foreach ($ekrafs as $ekraf)
                    <x-ui.card-business :title="$ekraf->name" :location="$ekraf->location" :image="asset('storage/' . $ekraf->logo)" :sector_id="$ekraf->sector->name" />
                    {{-- :detailUrl="route('admin.business.ekraf.detail',[$ekraf->id])" --}}
                @endforeach
            @endif
        </div>
        <x-ui.pagination />
    </div>
</section>
