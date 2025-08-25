@props([
    'id' => 'dropdownInput_' . uniqid(),
    'placeholder' => 'Pilih tag...',
    'selected' => [], // tambahkan untuk tag yang dipilih sebelumnya
])

@php
    $inputId = $id . '_input';
    $dropdownId = 'dropdown_' . $id;
@endphp

<div class="relative w-full md:w-1/2">
    {{-- Tag container --}}
    <div class="flex flex-wrap items-center gap-2 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600"
        id="{{ $inputId }}_container">

        {{-- Tag yang sudah dipilih --}}
        @foreach ($selected as $tag)
            <span class="bg-primary-100 text-primary-700 px-2 py-1 rounded-full text-xs flex items-center gap-1 tag-item"
                data-value="{{ $tag->id }}">
                {{ $tag->name }}
                <button type="button" class="remove-tag text-red-500 ml-1">&times;</button>
                <input type="hidden" name="{{ $id }}[]" value="{{ $tag->id }}" />
            </span>
        @endforeach

        <input type="text" id="{{ $inputId }}" placeholder="{{ $placeholder }}"
            class="flex-1 bg-transparent focus:outline-none text-gray-900 dark:text-white" autocomplete="off">
    </div>

    {{-- Dropdown --}}
    <div id="{{ $dropdownId }}"
        class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-full mt-1 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 scrollbar-custom">
            @foreach ($tags as $tag)
                <li>
                    <a href="#" data-value="{{ $tag->id }}" data-name="{{ $tag->name }}"
                        class="dropdown-option block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        {{ $tag->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

{{-- JS --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const maxTags = 5;

        const input = document.getElementById('{{ $inputId }}');
        const container = document.getElementById('{{ $inputId }}_container');
        const dropdown = document.getElementById('{{ $dropdownId }}');
        const selected = new Set();

        // Load existing tags
        container.querySelectorAll('.tag-item').forEach(tag => {
            selected.add(tag.dataset.value);
        });

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

                if (selected.size >= maxTags) {
                    alert(`Maksimal ${maxTags} tag diperbolehkan.`);
                    return;
                }

                const id = option.getAttribute('data-value');
                const name = option.getAttribute('data-name');

                if (selected.has(id)) return;

                selected.add(id);

                const tag = document.createElement('span');
                tag.className =
                    'bg-primary-100 text-primary-700 px-2 py-1 rounded-full text-xs flex items-center gap-1 tag-item';
                tag.dataset.value = id;
                tag.innerHTML = `
            ${name}
            <button type="button" class="remove-tag text-red-500 ml-1">&times;</button>
            <input type="hidden" name="{{ $id }}[]" value="${id}" />
        `;

                container.insertBefore(tag, input);

                tag.querySelector('.remove-tag').addEventListener('click', () => {
                    selected.delete(id);
                    tag.remove();
                });
            });
        });

        input.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();

                if (selected.size >= maxTags) {
                    alert(`Maksimal ${maxTags} tag diperbolehkan.`);
                    return;
                }

                const name = input.value.trim();
                if (!name) return;

                const isDuplicate = Array.from(container.querySelectorAll('.tag-item')).some(tag =>
                    tag.textContent.trim().toLowerCase().startsWith(name.toLowerCase())
                );

                if (isDuplicate) {
                    input.value = '';
                    return;
                }

                const id = 'new-' + name.replace(/\s+/g, '-').toLowerCase();

                selected.add(id);

                const tag = document.createElement('span');
                tag.className =
                    'bg-primary-100 text-primary-700 px-2 py-1 rounded-full text-xs flex items-center gap-1 tag-item';
                tag.dataset.value = id;
                tag.innerHTML = `
            ${name}
            <button type="button" class="remove-tag text-red-500 ml-1">&times;</button>
            <input type="hidden" name="{{ $id }}[]" value="${name}" data-new="1" />
        `;

                container.insertBefore(tag, input);
                input.value = '';

                tag.querySelector('.remove-tag').addEventListener('click', () => {
                    selected.delete(id);
                    tag.remove();
                });
            }
        });

    });
</script>
