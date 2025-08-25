@props([
    'id' => 'dropdownInput_' . uniqid(),
    'placeholder' => 'Pilih kategori...',
    'options' => ['Dashboard', 'Settings', 'Earnings', 'Sign out'],
])

@php
    $inputId = $id . '_input';
    $dropdownId = 'dropdown_' . $id;
@endphp

<div class="relative w-full md:w-1/2">
    {{-- Tag container & input --}}
    <div class="flex flex-wrap items-center gap-2 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600"
        id="{{ $inputId }}_container">
        <input type="text" id="{{ $inputId }}" placeholder="{{ $placeholder }}"
            class="flex-1 bg-transparent focus:outline-none text-gray-900 dark:text-white" autocomplete="off">
    </div>

    {{-- Dropdown --}}
    <div id="{{ $dropdownId }}"
        class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-full mt-1 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            @foreach ($options as $option)
                <li>
                    <a href="#" data-value="{{ $option }}"
                        class="dropdown-option block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        {{ $option }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div id="{{ $id }}_values"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const input = document.getElementById('{{ $inputId }}');
        const container = document.getElementById('{{ $inputId }}_container');
        const dropdown = document.getElementById('{{ $dropdownId }}');
        const valuesContainer = document.getElementById('{{ $id }}_values');
        const selected = new Set();

        const showDropdown = () => dropdown.classList.remove('hidden');
        const hideDropdown = () => dropdown.classList.add('hidden');

        input.addEventListener('focus', showDropdown);
        input.addEventListener('click', showDropdown);

        document.addEventListener('click', (e) => {
            if (!e.target.closest(`#{{ $inputId }}_container`) && !e.target.closest(
                    `#{{ $dropdownId }}`)) {
                hideDropdown();
            }
        });

        dropdown.querySelectorAll('.dropdown-option').forEach(option => {
            option.addEventListener('click', e => {
                e.preventDefault();
                const value = option.getAttribute('data-value');
                if (selected.has(value)) return;

                selected.add(value);

                // Create tag
                const tag = document.createElement('span');
                tag.className =
                    'bg-primary-100 text-primary-700 px-2 py-1 rounded-full text-xs flex items-center gap-1';
                tag.innerHTML = `
                    ${value}
                    <button type="button" class="remove-tag text-red-500 ml-1">&times;</button>
                `;

                // Append tag
                container.insertBefore(tag, input);

                // Hidden input
                const hidden = document.createElement('input');
                hidden.type = 'hidden';
                hidden.name = '{{ $id }}[]';
                hidden.value = value;
                hidden.dataset.value = value;
                valuesContainer.appendChild(hidden);

                // Remove tag logic
                tag.querySelector('.remove-tag').addEventListener('click', () => {
                    selected.delete(value);
                    tag.remove();
                    valuesContainer.querySelector(`input[data-value="${value}"]`)
                        .remove();
                });
            });
        });
    });
</script>
