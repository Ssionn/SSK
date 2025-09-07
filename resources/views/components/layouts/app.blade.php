<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=anek-kannada:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="grid w-screen h-screen grid-cols-1 sm:grid-cols-[2fr_5fr] grid-rows-[60px_1fr] sm:grid-rows-[50px_1fr]"
>
    <x-layouts.sidebar />

    <x-layouts.header :pageTitle="$pageTitle" />

    <main class="p-2 sm:p-3 border-l border-t border-gray-200 overflow-y-auto">
        {{ $slot }}
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
