<a {{ $attributes }}
    class="{{ $active ? 'text-primary-500' : 'text-gray-700 hover:text-primary-500' }} block rounded-md px-3 py-2 text-base font-medium"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
