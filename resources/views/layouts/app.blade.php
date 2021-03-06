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
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/uri-gd-3.fw.png') }}" alt="uri.gd" style="height: 20px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item dropdown">
                    <a id="navbarLegalDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Legal') }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarLegalDropdown">
                        <a class="dropdown-item" href="{{ route('legal-notice') }}">{{ __('Legal Notice') }}</a>
                        <a class="dropdown-item" href="{{ route('disclaimer') }}">{{ __('Disclaimer') }}</a>
                        <a class="dropdown-item" href="{{ route('privacy-policy') }}">{{ __('Privacy Policy') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarLanguageDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Language') }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarLanguageDropdown">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="dropdown-item">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="py-4">
    <div id="app">
        @yield('content')
    </div>
    @include('cookieConsent::index')
</main>

<footer class="footer">
    <div class="container">
        <span class="text-muted text-center d-md-none">Copyright &copy; 2018 by Markus Koehler IT Services<!-- Proudly powered by the Laravel Framework. | uri.gd v1.5.0 --></span>
        <span class="text-muted text-center d-none d-md-block">Copyright &copy; 2018 by Markus Koehler IT Services. Proudly powered by the Laravel Framework. | uri.gd v1.5.0</span>
    </div>
</footer>
@stack('foot')
<noscript id="deferred-styles">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('lib/open-iconic/font/css/open-iconic-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</noscript>
<script>
    var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement);
        addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
        window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
</script>
</body>
</html>
