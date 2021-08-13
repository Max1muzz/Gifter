<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light fixed-top" style="background-color: #D9D9D9;">
            <div class="container">
                <div class="col col-sm-2 col-md-1 navbar-nav">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/icons/genie.svg" alt="Подаркин" width="30" height="30">
                    </a>
                </div>
                <div class="col col-sm-2 col-md-1 navbar-nav">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                </div>
                <div class="col-7 col-sm-8 col-md-10 navbar-nav">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                </div>



            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
