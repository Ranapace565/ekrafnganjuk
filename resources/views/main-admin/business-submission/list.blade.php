<section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-6 w-full">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mb-4 grid gap-4 md:grid-cols-3 lg:grid-cols-4 xs:grid-cols-2 grid-cols-1">
            @if ($submissions != null)
                @foreach ($submissions as $submission)
                    <x-ui.card-business :title="$submission->name" :location="$submission->location" :image="asset('storage/' . $submission->proof)" :sector_id="$submission->sector->name"
                        :manager="$submission->manager" :contact="$submission->contact" :status="$submission->status" :detailUrl="route('admin.business.submission.detail',[$submission->id])" />
                @endforeach
            @endif
        </div>
        <x-ui.pagination :paginator="$submissions" />
    </div>

</section>
