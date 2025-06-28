@props([
    'id' => 'dropdownInput_' . uniqid(),
    'placeholder' => 'Web Development & Agriculture',
    'options' => ['Dashboard', 'Settings', 'Earnings', 'Sign out'],
])

<div class="relative w-full md:w-1/2">
    <input type="text" name="{{ $id }}" id="{{ $id }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="{{ $placeholder }}" autocomplete="off" required>

    <div id="dropdown_{{ $id }}"
        class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-full dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            @foreach ($options as $option)
                <li>
                    <a href="#" data-value="{{ $option }}"
                        class="dropdown-option-{{ $id }} block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        {{ $option }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const input = document.getElementById('{{ $id }}');
        const dropdown = document.getElementById('dropdown_{{ $id }}');

        const showDropdown = () => dropdown.classList.remove('hidden');
        const hideDropdown = () => dropdown.classList.add('hidden');

        input.addEventListener('focus', showDropdown);
        input.addEventListener('click', showDropdown);

        document.addEventListener('click', (e) => {
            if (!e.target.closest('#{{ $id }}') && !e.target.closest(
                    '#dropdown_{{ $id }}')) {
                hideDropdown();
            }
        });

        document.querySelectorAll('.dropdown-option-{{ $id }}').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                input.value = item.getAttribute('data-value');
                hideDropdown();
            });
        });
    });
</script>
