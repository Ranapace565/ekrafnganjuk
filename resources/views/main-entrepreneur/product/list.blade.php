<section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-6 w-full">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mb-4 grid gap-4 grid-cols-2 sm:grid-cols-2 md:grid-cols-3 md:mb-8 lg:grid-cols-4 xl:grid-cols-6">
            @if ($Products != null)
                @foreach ($Products as $Product)
                    <x-ui.card-product size="" :title="$Product->name" :image="$Product->images->first()
                        ? asset('storage/' . $Product->images->first()->image_path)
                        : null" :price="$Product->price"
                        :editUrl="route('entrepreneur.product.edit', $Product->slug)" :deleteUrl="route('entrepreneur.product.destroy', $Product->id)" />
                @endforeach
            @endif
        </div>
        <x-ui.pagination :paginator="$Products" />
    </div>

</section>
