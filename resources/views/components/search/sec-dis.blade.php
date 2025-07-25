@props([
    'district' => '',
    'sector' => '',
    'selectedDistrict' => null,
    'selectedSector' => null,
])

<div
    class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">

    {{-- Kecamatan Dropdown --}}
    <div class="relative">
        <button id="districtDropdownButton" data-dropdown-toggle="districtDropdown"
            class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
            type="button">
            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
            </svg>
            @if ($district)
                {{ $district }}
            @else
                Kecamatan
            @endif
        </button>

        <div id="districtDropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200 max-h-60 overflow-y-auto scrollbar-custom">
                <li>
                    <a href="{{ request()->fullUrlWithoutQuery('district_id') }}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Semua Kecamatan
                    </a>
                </li>
                @foreach ($districts as $district)
                    <li>
                        <a href="{{ request()->fullUrlWithQuery(['district_id' => $district->id]) }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white
                            {{ $selectedDistrict == $district->id ? 'bg-gray-100 dark:bg-gray-600' : '' }}">
                            {{ $district->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- Sektor Dropdown --}}
    <div class="relative">
        <button id="sectorDropdownButton" data-dropdown-toggle="sectorDropdown"
            class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
            type="button">
            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
            </svg>
            @if ($sector)
                {{ $sector }}
            @else
                Sektor
            @endif
        </button>

        <div id="sectorDropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200 max-h-60 overflow-y-auto scrollbar-custom">
                <li>
                    <a href="{{ request()->fullUrlWithoutQuery('sector_id') }}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Semua Sektor
                    </a>
                </li>
                @foreach ($sectors as $sector)
                    <li>
                        <a href="{{ request()->fullUrlWithQuery(['sector_id' => $sector->id]) }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white
                            {{ $selectedSector == $sector->id ? 'bg-gray-100 dark:bg-gray-600' : '' }}">
                            {{ $sector->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
