<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 ">

<x-head></x-head>

<body class="h-full scrollbar-custom">
    <div class="min-h-full scrollbar-custom">
        <x-sidebar.admin />

        <main class="lg:ml-64 mt-14 bg-white dark:bg-gray-900 scrollbar-custom">
            <div class="mx-auto scrollbar-custom">

                <x-ui.alert></x-ui.alert>

                {{ $slot }}

                <x-footer></x-footer>
            </div>
        </main>
</body>

</html>
