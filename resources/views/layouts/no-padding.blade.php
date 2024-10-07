<!DOCTYPE html>

<html data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="UTF-8">
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/css/app.css')
</head>


<body class="mx-auto">
    {{-- INCLUDES FOR COMPONENTS --}}
    @include('components.header')

    <main class="bg-base-300">
        {{-- YIELD FOR CONTENT --}}
        @yield('content')
    </main>


    @include('components.footer')
</body>


</html>
