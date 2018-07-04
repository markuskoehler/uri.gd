<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script>
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    @stack('head')
    @include('matomo')
</head>
<body>
@include('partials.nav')
<main class="py-4">
    <div id="app">
        @yield('content')
    </div>
    @include('cookieConsent::index')
</main>
@include('partials.footer')
@stack('foot')
@include('partials.deferred_styles')
</body>
</html>
