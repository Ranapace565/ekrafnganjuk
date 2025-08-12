<section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-6 w-full">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mb-4 grid gap-4 md:grid-cols-3 lg:grid-cols-4 xs:grid-cols-2 grid-cols-1">
            @if ($ekrafs != null)
                @foreach ($ekrafs as $ekraf)
                    <x-ui.card-business :title="$ekraf->name" :location="$ekraf->location" :image="asset('storage/' . $ekraf->logo)" :sector_id="$ekraf->sector->name"
                        :manager="$ekraf->manager" :contact="$ekraf->contact" :status="$ekraf->status" />
                    {{-- :detailUrl="route('admin.business.ekraf.detail',[$ekraf->id])" --}}
                @endforeach
            @endif
        </div>
        <x-ui.pagination :paginator="$ekrafs" />
    </div>

</section>
