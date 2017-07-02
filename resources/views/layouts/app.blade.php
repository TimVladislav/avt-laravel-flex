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
    <a class="nav__btn nav__btn--floating" href="#nav__right-bar"><i class="fa fa-bars"></i></a>
    <section id="modal">
        <section id="window">
            @if (Auth::guest())
                <section id="login">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <md-input-container class="col-md-6">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>
                            <md-input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </md-input-container>
                        <md-input-container class="col-md-6">
                            <label for="password" class="col-md-4 control-label">Пароль</label>
                            <md-input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </md-input-container>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <md-checkbox type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня</md-checkbox>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <md-button type="submit">
                                    Войти
                                </md-button>

                                <md-button class="btn btn-link" href="{{ route('password.request') }}">
                                    Забыли пароль?
                                </md-button>
                            </div>
                        </div>
                    </form>
                </section>
                <section id="register">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <md-input-container class="col-md-6">
                            <label for="name" class="col-md-4 control-label">Имя</label>
                            <md-input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </md-input-container>
                        <md-input-container class="col-md-6">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>
                            <md-input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </md-input-container>
                        <md-input-container class="col-md-6">
                            <label for="password" class="col-md-4 control-label">Пароль</label>
                            <md-input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </md-input-container>
                        <md-input-container class="col-md-6">
                            <label for="password-confirm" class="col-md-4 control-label">Еще раз</label>
                            <md-input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </md-input-container>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <md-button type="submit" class="btn btn-primary">
                                    Зарегистрироваться
                                </md-button>
                            </div>
                        </div>
                    </form>
                </section>
            @else
                <section id="lk">
                    <md-button href="/home">Административная панель</md-button>
                </section>
            @endif
            <section id="video">
                <section id="yt"></section>
            </section>
        </section>
    </section>
    <main id="app">
        <header>
            <nav id="nav__top">
                <a href="/"><div id="nav__logo"><img src="/img/logo1.png" alt=""></div></a>
                <a class="nav__btn" href="#nav__right-bar"><i class="fa fa-bars"></i></a>
            </nav>
        </header>

        @yield('content')
    </main>
    <nav id="nav__right-bar">
        <div class="right-bar__top">
            <a href="/" id="nav__logo"><img src="/img/logo1.png" alt=""></a>
            <a class="nav__btn nav__btn--gray" href="#nav__right-bar"><i class="fa fa-close"></i></a>
        </div>
        <div class="right-bar__items">
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="#modal" data-content="#login">Войти</a></li>
                    <li><a href="#modal" data-content="#register">Зарегистрироваться</a></li>
                @else
                    <li class="dropdown">
                        <a href="#modal" data-content="#lk" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
            <ul>
                <li><a href="/"><i class="fa fa-heart heart heart--small heart--red"></i>Главная</a></li>
                <li><a href="/about"><i class="fa fa-heart heart heart--small heart--red"></i>Обо мне</a></li>
                <li><a href="/price"><i class="fa fa-heart heart heart--small heart--red"></i>Прайс-лист</a></li>
                <li><a href="/works"><i class="fa fa-heart heart heart--small heart--red"></i>Мои работы</a></li>
                <li><a href="/order"><i class="fa fa-heart heart heart--small heart--red"></i>Оформить заказ</a></li>
                <li><a href="/contacts"><i class="fa fa-heart heart heart--small heart--red"></i>Обратная связь</a></li>
            </ul>
        </div>
    </nav>
    <footer class="parallax-section footer" data-type="parallax" data-speed="-2">
        <div class="main-slider-section__text">
            <div class="box text-center">
                <div class="rotate">
                    <div class="box__text">A<span class="text-red">V</span>T</div>
                    <div class="box__text">video</div>
                </div>
                <div class="line-text">
                    *** Видеосъемка свадеб и торжеств ***
                </div>
                <div class="line-hearts">
                    <span class="white-line"></span>
                    <i class="fa fa-heart heart heart--line heart--medium heart--red heart--z"></i>
                    <i class="fa fa-heart heart heart--line heart--medium heart--white heart--ml"></i>
                    <span class="white-line"></span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/js/device.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/sliders/slick-1.6.0/slick/slick.js"></script>
    <script>
        $(document).ready(function () {
           $('.main-slider').slick({
               fade: true,
               autoplay: true,
               autoplaySpeed: 5000,
               pauseOnHover: false,
               mobileFirst: true
           });
        });
    </script>
</body>
</html>
