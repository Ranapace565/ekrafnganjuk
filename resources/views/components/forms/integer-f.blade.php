@props(['tite' => null, 'name' => null, 'data' => 0])

<div
    class="flex items-center mt-4 md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">{{ $tite }}</div>
    <input type="number" name="{{ $name }}" id="{{ $name }}"
        class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="0" value="{{ $data }}" />
</div>
