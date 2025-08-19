<div class="mb-6 lg:mb-0 lg:mt-0 mt-5 lg:col-span-9 flex flex-col justify-center ">
    <div class=" w-full flex-none ">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
            Event
        </h2>
        <div class="mb-4 grid gap-4 md:mb-8 md:grid-cols-2 grid-cols-1 min-h-screen">
            @if ($Events != null)
                @foreach ($Events as $Event)
                    <x-ui.card-event size="" :title="$Event->title" :sector="$Event->sector->name" :start_date="$Event->start_date"
                        :end_date="$Event->end_date" :location="$Event->location" :poster="asset('storage/' . $Event->poster)" :detailUrl="route('event-detail', $Event->slug)" />
                @endforeach
            @endif
        </div>
        <x-ui.pagination :paginator="$Events" />
    </div>
</div>
