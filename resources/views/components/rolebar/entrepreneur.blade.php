<div class="border-t border-gray-700 pb-3 pt-4">
    <div class="flex items-center px-5">
        <div class="shrink-0">
            <img class="size-10 rounded-full"
                src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                alt="{{ Auth::user()->name }}>
        </div>

        <div class="ml-3">
            <div class="text-base/5 font-medium dark:text-white text-gray-800">{{ $user->name }}</div>
            <div class="text-sm font-medium text-gray-400">{{ $user->email }}</div>
        </div>

        <button type="button"
            class="relative ml-auto shrink-0 rounded-full p-1 hover:bg-primary-500 text-gray-400 hover:text-white  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 ">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
        </button>
    </div>
    <div class="mt-3 space-y-1 px-2">
        <x-navbar.visitor-link-mobile href="{{ route('entrepreneur.') }}" :active="request()->is('entrepreneur')">
                Kelola Usahamu
            </x-navbar.visitor-link-mobile>
        <x-navbar.visitor-link-mobile href="/beranda" :active="request()->is('keluar')">
                Keluar
            </x-navbar.visitor-link-mobile>
        {{-- <a href="/profil"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Profil</a>
        <a href="#"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
        <a href="/keluar"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Keluar</a> --}}
    </div>
</div>
