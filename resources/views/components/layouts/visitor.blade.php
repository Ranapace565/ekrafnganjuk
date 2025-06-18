<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 ">

<x-head></x-head>

<body class="h-full">
    <div class="min-h-full">

        <x-navbar.visitor></x-navbar.visitor>

        <main class="pt-10">
            <div class="mx-auto pt-6">

                <x-ui.alert></x-ui.alert>

                {{ $slot }}
            </div>
        </main>

        <x-footer></x-footer>
    </div>
</body>

</html>
