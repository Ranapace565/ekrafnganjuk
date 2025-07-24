@props(['paginator' => ''])

@if ($paginator != null)
    <nav aria-label="Page navigation" class="flex justify-center mt-6">
        <ul class="flex items-center -space-x-px h-8 text-sm">

            {{-- Previous Page --}}
            <li>
                <a href="{{ $paginator->previousPageUrl() ?? '#' }}"
                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 rounded-lg hover:text-primary-400 {{ $paginator->onFirstPage() ? 'opacity-50 pointer-events-none' : '' }}">
                    <span class="sr-only">Previous</span>
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" fill="none" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                </a>
            </li>

            {{-- Pagination Elements --}}
            @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                <li>
                    <a href="{{ $url }}"
                        class="flex items-center justify-center px-3 h-8 leading-tight rounded-lg
                        {{ $paginator->currentPage() === $page ? 'bg-primary-600 text-white' : 'text-gray-500 hover:text-primary-400' }}">
                        {{ $page }}
                    </a>
                </li>
            @endforeach

            {{-- Next Page --}}
            <li>
                <a href="{{ $paginator->nextPageUrl() ?? '#' }}"
                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 rounded-lg hover:text-primary-400 {{ $paginator->hasMorePages() ? '' : 'opacity-50 pointer-events-none' }}">
                    <span class="sr-only">Next</span>
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" fill="none" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                </a>
            </li>

        </ul>
    </nav>
@endif
