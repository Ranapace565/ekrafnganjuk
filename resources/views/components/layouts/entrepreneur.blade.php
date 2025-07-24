<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 ">

<x-head></x-head>

<body class="scrollbar-custom h-full">
    <div class="scrollbar-custom min-h-full">
        <x-sidebar.entrepreneur />

        <main class="scrollbar-custom lg:ml-64 mt-14 bg-white dark:bg-gray-900">
            <div class="scrollbar-custom mx-auto">

                <x-ui.alert></x-ui.alert>

                {{ $slot }}

                <x-footer></x-footer>
            </div>
        </main>
</body>

</html>
