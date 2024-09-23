<!DOCTYPE html>

<html data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="UTF-8">
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/css/app.css')
</head>


<body class="mx-auto bg-base-300">
    {{-- INCLUDES FOR COMPONENTS --}}
    @include('components.navbar')

    <main>
        {{-- YIELD FOR CONTENT --}}
        @yield('content')
    </main>

    @include('components.footer')
</body>


</html>
