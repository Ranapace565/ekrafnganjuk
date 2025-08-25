<div class="relative ml-3">
    <div>
        <button type="button" @click="isOpen = !isOpen"
            class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-600"
            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">Open user menu</span>
            <img class="size-8 rounded-full"
                src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                alt="{{ Auth::user()->name }}">
        </button>
    </div>
    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white dark:bg-gray-700 py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">

        <a href="/admin" class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-700 hover:text-white"
            role="menuitem" tabindex="-1" id="user-menu-item-0">Kelola Admin
        </a>

        <a href="/logout" class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-700 hover:text-white"
            role="menuitem" tabindex="-1" id="user-menu-item-2">Keluar</a>
    </div>
</div>
