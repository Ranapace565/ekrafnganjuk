@props([
    'id' => 'categoryInput_' . uniqid(),
    'data' => null,
    'choose' => '---- Pilih Kategori ----',
    'fillable' => '',
    'categories' => [],
])

@php
    $inputId = $id . '_input';
    $dropdownId = 'dropdown_' . $id;
@endphp

<div class="relative w-full md:w-1/2">
    {{-- Input kategori --}}
    <div
        class="flex items-center gap-2 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600">
        <input type="text" id="{{ $inputId }}" name="category_name" placeholder="{{ $choose }}"
            class="flex-1 bg-transparent focus:outline-none text-gray-900 dark:text-white"
            value="{{ old('category_name', $data?->name ?? '') }}" autocomplete="off" {{ $fillable }}>
    </div>

    {{-- Dropdown kategori --}}
    <div id="{{ $dropdownId }}"
        class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-full mt-1 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 max-h-60 overflow-y-auto">
            @foreach ($categories as $category)
                <li>
                    <a href="#" data-id="{{ $category->id }}" data-name="{{ $category->name }}"
                        class="dropdown-category block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    {{-- Hidden input untuk ID kategori jika pilih dari list --}}
    <input type="hidden" name="category_id" id="{{ $id }}_hidden" value="{{ $data?->id }}">
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const input = document.getElementById('{{ $inputId }}');
        const dropdown = document.getElementById('{{ $dropdownId }}');
        const hiddenInput = document.getElementById('{{ $id }}_hidden');

        const showDropdown = () => dropdown.classList.remove('hidden');
        const hideDropdown = () => dropdown.classList.add('hidden');

        input.addEventListener('focus', showDropdown);
        input.addEventListener('click', showDropdown);

        input.addEventListener('input', () => {
            hiddenInput.value = ''; // reset category_id saat user mengetik manual
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest(`#{{ $inputId }}`) && !e.target.closest(
                `#{{ $dropdownId }}`)) {
                hideDropdown();
            }
        });

        dropdown.querySelectorAll('.dropdown-category').forEach(option => {
            option.addEventListener('click', e => {
                e.preventDefault();
                const id = option.getAttribute('data-id');
                const name = option.getAttribute('data-name');

                input.value = name;
                hiddenInput.value = id;
                hideDropdown();
            });
        });
    });
</script>
