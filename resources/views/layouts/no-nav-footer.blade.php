<!DOCTYPE html>

<html data-theme="forest" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="UTF-8">
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/29c53c0003.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="mx-auto">

    <main class="bg-base-300 py-6 px-[10%]">
        {{-- YIELD FOR CONTENT --}}
        @yield('content')
    </main>

</body>
@livewireScripts

</html>
