<select name="{{ $name }}" id="{{ $id ?? $name }}"
    class="{{ $class ?? 'scrollbar-custom w-full px-4 py-2 text-sm border border-gray-300 rounded-lg bg-gray-50 overflow-y-auto focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white my-2' }}">
    <option value="" disabled {{ is_null($selected) ? 'selected' : '' }} hidden>
        {{ $placeholder ?? 'Pilih salah satu' }}</option>

    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>
            {{ $label }}
        </option>
    @endforeach
</select>
