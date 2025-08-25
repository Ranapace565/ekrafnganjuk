<section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-6 w-full">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mb-4 grid gap-4 grid-cols-1 sm:grid-cols-2">
            @if ($Sectors != null)
                @foreach ($Sectors as $sector)
                    <x-ui.card-low title="{{ $sector->name }}" :description="$sector->description" icon="{{ $sector->icon }}" size=""
                        detailUrl="" editUrl="{{ route('admin.sector.edit', $sector->id) }}"
                        deleteUrl="{{ route('admin.sector.destroy', $sector->id) }}" />
                @endforeach
            @endif
        </div>
        <x-ui.pagination :paginator="$Sectors" />
    </div>
</section>
{{-- 
<section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-6 w-full">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mb-4 grid gap-4 md:grid-cols-2 lg:grid-cols-2 xs:grid-cols-2 grid-cols-1">
            @foreach ($Sectors as $sector)
                <x-ui.card-low title="{{ $sector->name }}" description="{{ $sector->description }}"
                    icon="{{ $sector->icon }}" size="" detailUrl=""
                    editUrl="{{ route('admin.sector.edit', $sector->id) }}"
                    deleteUrl="{{ route('admin.sector.destroy', $sector->id) }}" />
            @endforeach
        </div>
        <x-ui.pagination :paginator="$Sectors" />
    </div>

</section> --}}
