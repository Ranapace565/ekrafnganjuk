<section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-6 w-full">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mb-4 grid gap-4 grid-cols-1 md:grid-cols-2">
            @if ($Events != null)
                @foreach ($Events as $Event)
                    <x-ui.card-event size="" :title="$Event->title" :sector="$Event->sector->name" :start_date="$Event->start_date"
                        :end_date="$Event->end_date" :location="$Event->location" :poster="asset('storage/' . $Event->poster)" :status="$Event->status" :editUrl="route('admin.event.edit', $Event->slug)"
                        :deleteUrl="route('admin.event.destroy', $Event->id)" />
                @endforeach
            @endif
        </div>
        <x-ui.pagination />
    </div>
</section>
