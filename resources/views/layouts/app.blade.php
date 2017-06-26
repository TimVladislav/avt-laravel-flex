<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <div id="app">
        <header>
            <nav id="nav__top">
                <a href="/"><div id="nav__logo"><img src="/img/logo1.png" alt=""></div></a>
                <a class="nav__btn" href="#nav__right-bar"><i class="fa fa-bars"></i></a>
            </nav>
        </header>

        @yield('content')
    </div>
    <nav id="nav__right-bar">
        <div class="right-bar__top">
            <a href="/" id="nav__logo"><img src="/img/logo1.png" alt=""></a>
            <a class="nav__btn nav__btn--gray" href="#nav__right-bar"><i class="fa fa-close"></i></a>
        </div>
        <div class="right-bar__items">
            <ul>
                <li><a href=""><i class="fa fa-heart heart heart--small heart--red"></i>Главная</a></li>
                <li><a href=""><i class="fa fa-heart heart heart--small heart--red"></i>Обо мне</a></li>
                <li><a href=""><i class="fa fa-heart heart heart--small heart--red"></i>Прайс-лист</a></li>
                <li><a href=""><i class="fa fa-heart heart heart--small heart--red"></i>Мои работы</a></li>
                <li><a href=""><i class="fa fa-heart heart heart--small heart--red"></i>Оформить заказ</a></li>
                <li><a href=""><i class="fa fa-heart heart heart--small heart--red"></i>Обратная связь</a></li>
            </ul>
        </div>
    </nav>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/sliders/slick-1.6.0/slick/slick.js"></script>
    <script>
        $(document).ready(function () {
           $('.main-slider').slick({
               fade: true,
               autoplay: true,
               autoplaySpeed: 5000,
               pauseOnHover: false
           });
        });
    </script>
</body>
</html>
