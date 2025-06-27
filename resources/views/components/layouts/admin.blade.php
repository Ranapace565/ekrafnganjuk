<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 ">

<x-head></x-head>

<body class="h-full">
    <div class="min-h-full">
        <x-sidebar.admin />

        <main class="lg:ml-64 mt-14 bg-white dark:bg-gray-900">
            <div class="mx-auto">

                <x-ui.alert></x-ui.alert>

                {{ $slot }}

                <x-footer></x-footer>
            </div>
        </main>
</body>

</html>
