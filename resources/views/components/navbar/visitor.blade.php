<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
{{-- <div class="min-h-full"> --}}
<nav class="fixed top-0 left-0 w-full z-[9999] bg-white shadow dark:bg-gray-900 " x-data="{ isOpen: false }"
    x-on:click.outside="isOpen = false">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="size-8"
                        src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-700 hover:bg-gray-700 hover:text-white" -->
                        <x-navbar.visitor-link href="/beranda" :active="request()->is('beranda')">
                            Beranda
                        </x-navbar.visitor-link>
                        <x-navbar.visitor-link href="/tentang" :active="request()->is('tentang')">
                            Tentang
                        </x-navbar.visitor-link>
                        <x-navbar.visitor-link href="/infografis" :active="request()->is('infografis')">
                            Infografis
                        </x-navbar.visitor-link>
                        <x-navbar.visitor-link href="/sektor" :active="request()->is('sektor')">
                            Sektor
                        </x-navbar.visitor-link>

                        {{-- <x-navbar.visitor-link href="/informasi" :active="request()->is('informasi')">
                            Informasi
                        </x-navbar.visitor-link> --}}

                        <button id="dropdownNavButton" data-dropdown-toggle="dropdownNav" data-dropdown-delay="500"
                            data-dropdown-trigger="hover"
                            class="{{ request()->is('informasi') ? 'text-primary-500' : 'text-gray-700 hover:text-primary-500' }} rounded-md px-3 py-2 text-sm font-medium flex items-center"
                            type="button">Informasi
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownNav"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownNavButton">
                                <li>
                                    <a href="/artikel"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Artikel</a>
                                </li>
                                <li>
                                    <a href="/event"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Event</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                        out</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <div class="flex space-x-2">
                        <button type="button"
                            class="p-2 relative rounded-full bg-transparent 
                        hover:bg-primary-500 text-gray-400 hover:text-white  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>
                        {{-- {{ $nav_web }} --}}
                    </div>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" @click="isOpen = !isOpen"
                                class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-600"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="size-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>
                        <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75 transform"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white dark:bg-gray-700 py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->

                            <a href="/profil"
                                class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-700 hover:text-white"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Profil</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-700 hover:text-white"
                                role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="/keluar"
                                class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-700 hover:text-white"
                                role="menuitem" tabindex="-1" id="user-menu-item-2">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->

                {{-- button menu user lain --}}
                <div class="flex space-x-2">
                    {{-- {{ $nav_mobile }} --}}
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center rounded-md bg-white dark:bg-gray-900 p-2 text-gray-400 hover:bg-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg :class="{
                            'block': isOpen,
                            'hidden': !isOpen
                        }"
                            class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95" class="md:hidden w-full bg-white dark:bg-gray-900 shadow-lg"
        id="mobile-menu">


        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-700 hover:bg-gray-700 hover:text-white" -->

            <x-navbar.visitor-link-mobile href="/beranda" :active="request()->is('beranda')">
                Beranda
            </x-navbar.visitor-link-mobile>
            <x-navbar.visitor-link-mobile href="/tentang" :active="request()->is('tentang')">
                Tentang
            </x-navbar.visitor-link-mobile>
            <x-navbar.visitor-link-mobile href="/infografis" :active="request()->is('infografis')">
                Infografis
            </x-navbar.visitor-link-mobile>
            <x-navbar.visitor-link-mobile href="/sektor" :active="request()->is('sektor')">
                Sektor
            </x-navbar.visitor-link-mobile>

            <button id="dropdownNav2Button" data-dropdown-toggle="dropdownNav2" data-dropdown-delay="500"
                data-dropdown-trigger="hover"
                class="{{ request()->is('informasi') ? 'text-primary-500' : 'text-gray-700  hover:text-primary-500' }} rounded-md px-3 py-2 text-sm font-medium flex items-center w-full"
                type="button">Informasi
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownNav2"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownNav2Button">
                    <li>
                        <a href="/artikel"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Artikel</a>
                    </li>
                    <li>
                        <a href="/event"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Event</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>

            {{-- <x-navbar.visitor-link-mobile href="/informasi" :active="request()->is('informasi')">
                Informasi
            </x-navbar.visitor-link-mobile> --}}

        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="shrink-0">
                    <img class="size-10 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base/5 font-medium text-white">Tom Cook</div>
                    <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                </div>

                <button type="button"
                    class="relative ml-auto shrink-0 rounded-full p-1 hover:bg-primary-500 text-gray-400 hover:text-white  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 ">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </button>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="/profil"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white ">Profil</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                <a href="/keluar"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Keluar</a>
            </div>
        </div>
    </div>
</nav>

{{-- <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Beranda</h1>
    </div>
</header> --}}
{{-- <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
        </div>
    </main> --}}
{{-- </div> --}}
