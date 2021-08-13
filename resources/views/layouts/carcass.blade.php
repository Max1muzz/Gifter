<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <title>@yield('title')</title>
    </head>
    <body class="colorFon">
    <!-- ПОСТОЯННОЕ МЕНЮ -->

        <nav class="navbar navbar-light fixed-top" style="background-color: #D9D9D9;">
            <div class="container-fluid">
                <div class="col col-sm-2 col-xl-1 navbar-nav">
                    <a href="{{route('showHome')}}" class="nav-link mx-auto">
                        <img src="/icons/genie.svg" alt="Подаркин" width="40" height="40">
                    </a>
                </div>
                <div class="col col-sm-2 col-md-1 navbar-nav">
                    <a href="{{route('showTop')}}" class="nav-link mini">
                        <img src="/icons/top-games-star.svg" class="rounded mx-auto d-block" alt="TOP 10" width="28" height="28">
                        <p class="text-center text-small">TOP 10</p>
                    </a>
                    <a href="{{route('showTop')}}" class="nav-link maxi">TOP 10</a>
                </div>
                <div class="col col-sm-2 col-md-1 navbar-nav">
                    <a href="{{route('select.base')}}" class="nav-link mini">
                        <img src="/icons/gift.svg" class="rounded mx-auto d-block" alt="Подбор" width="32" height="32">
                        <p class="text-center text-small">Подбор</p>
                    </a>
                    <a href="{{route('select.base')}}" class="nav-link maxi">Подбор</a>
                </div>
                <div class="col col-sm-2 col-md-1 navbar-nav">
                    <a href="{{route('profile.base')}}" class="nav-link mini">
                        <img src="/icons/person_outline_black_24dp.svg" class="rounded mx-auto d-block" alt="Профиль" width="35" height="35">
                        <p class="text-center text-small">Профиль</p>
                    </a>
                    <a href="{{route('profile.base')}}" class="nav-link maxi">Профиль</a>
                </div>
                <div class="col col-sm-3 col-md-6 col-xl-7 navbar-nav">
                    <a href="{{route('showInfo')}}" class="nav-link mini">
                        <img src="/icons/help_outline_black_24dp.svg" class="rounded mx-auto d-block" alt="Info" width="33" height="33">
                        <p class="text-center text-small">Инфо</p>
                    </a>
                    <a href="{{route('showInfo')}}" class="nav-link maxi">Инфо</a>
                </div>
            </div>
        </nav>
    <br><br><br>
        @yield('content')
    <script src="/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
