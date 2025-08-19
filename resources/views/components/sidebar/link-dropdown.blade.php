@props([
    'active' => false,
    'label',
    'icon' => '',
    'items' => null,
    'id' => 'dropdown-' . uniqid(),
    'total_badge' => null,
])

<button type="button"
    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
    aria-controls="{{ $id }}" data-collapse-toggle="{{ $id }}">
    {!! $icon !!}
    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{ $label }}</span>
    @if ($total_badge)
        <span
            class="inline-flex items-center justify-center w-3 h-3 p-3 mr-3 text-sm font-medium text-primary-800 bg-primary-100 rounded-full dark:bg-primary-900 dark:text-primary-300">
            {{ $total_badge }}
        </span>
    @endif
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
    </svg>

</button>

<ul id="{{ $id }}" class="{{ $active ? 'block' : 'hidden' }} py-2 space-y-2">
    @foreach ($items as $item)
        <li>
            <div class="flex items-center hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                <a href="{{ $item['url'] }}"
                    class=" {{ $item['active'] ? 'text-primary-500' : 'text-gray-900 dark:text-white ' }} flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group ">
                    {{ $item['label'] }}
                </a>
                @if ($item['badge'])
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 mr-3 text-sm font-medium text-red-800 bg-red-100 rounded-full dark:bg-red-900 dark:text-red-300">
                        {{ $item['badge'] }}
                    </span>
                @endif
            </div>
        </li>
    @endforeach
</ul>
