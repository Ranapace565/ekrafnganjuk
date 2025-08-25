@props([
    'id' => uniqid(),
    'image' => asset('images/no-image.png'),
    'title' => '',
    'sector' => '',
    'price' => null,
    'detailUrl' => null,
    'editUrl' => null,
    'deleteUrl' => null,
])

<div class="rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">

    <div class="h-36 w-full ">
        <a href="{{ $detailUrl }}">
            <img class="rounded-t-lg w-full h-full object-cover" src="{{ $image }}" alt="{{ $image }}" />
        </a>
    </div>

    <div class="my-1 p-4">

        <div class="flex justify-between my-2">
            <span
                class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                {{ Str::limit($sector, 20, '..') }}</span>
            <x-ui.button-menu :detailUrl="$detailUrl" :editUrl="$editUrl" :deleteUrl="$deleteUrl" />
        </div>

        <a href="{{ $detailUrl }}"
            class="text-sm font-semibold leading-tight text-gray-900 hover:underline dark:text-white">
            {{ Str::limit($title, 30, '...') }}
        </a>

        @if ($price)
            <div class="mt-4 block items-center justify-between gap-4">
                <p class="sm:grid-cols-1 text-sm font-extrabold leading-tight text-gray-900 dark:text-white">
                    <span class="text-xs">Rp.</span> {{ Str::limit($price, 9, '..') }}
                </p>
            </div>
        @endif
    </div>
</div>
