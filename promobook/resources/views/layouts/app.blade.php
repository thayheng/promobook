<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PROMOBOOK</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        a{
            color: white;
        }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background:orange">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}" style="color: white">
                PROMOBOOK
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto" style="padding-left: 300px">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <p></p>
</div>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="background:orange;text-align: center">
                <a href="">THANK TO OUR SPONSOR</a>
            </div>
            <div class="card-body row" style="text-align: center">
                <div class="col-3">
                    Smart Axiata
                </div>
                <div class="col-3">
                    Ezecome Internet
                </div>
                <div class="col-3">
                    Pizza Company
                </div>
                <div class="col-3">
                    Amazone Coffee
                </div>
            </div>
        </div>
    </div>
</div>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="card-body" style="width: 100%">
            <hr>
            <div class="card-body row" style="color: white;text-align: center">
                <div class="col-4">
                    <div class="card-header" style="background: orange">
                        About Us
                    </div>
                    <div class="card-body">
                        <p style="color: black">
                       Why pay more when you can pay less. We are promobook.app and We believe that we would make a different that positively improve life quality by providing three main values preposition. <br> <p style="color: black">
                        <b>Convinience &nbsp&nbsp </b> <b>Accuracy &nbsp&nbsp </b>  <b>Save</b>
                        </p><hr>
                    </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-header" style="background: orange">
                            Contact Us
                    </div>
                    <div class="card-body" style="color: black;">
                        <p>Name: &nbsp;<b>Oeng Meng Thong</b></p>
                        <p>Position:&nbsp <b>Development Manager</b> </p>
                        <p>Contact:&nbsp <b>069 606 631</b> </p>
                        <p>Email: &nbsp <b>thongthong@gmail.com</b></p><hr>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-header" style="background: orange">
                        Follow Us
                    </div>
                    <div class="card-body" style="color: black">
                        <a>Facebook</a><br><br>
                        <a>Instagram</a><br><br>
                        <a>Twitter</a><br><br>
                        
                        <hr>
                    </div>
                </div>
            </div>
            <div class="card-body" style="width:100%;text-align: center;background: wheat;margin: 0px 0px">
                <hr>
                    COPYRIGHT2019@PROMOBOOK.APP
            </div>
        </div>
</div>
</body>
</html>

