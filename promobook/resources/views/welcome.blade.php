<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: orange;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('PostController.index') }}"><b>PROMOBOOK</b></a>
                    @else
                        <a href="{{ route('login') }}"><b>LOGIN</b></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><b>REGISTER</b></a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="row">
                    <div class="col-sm">
                        <div class="title m-b-md">
                            PROMOBOOK
                        </div>

                        <div class="links">
                            <a href="">Accuracy</a>
                            <a href="">Convinience</a>
                            <a href="">Secure</a>
                        </div>
                    </div>
                    <div class="col-sm">
{{--                        <img src="{{asset('images/upload.png')}}">--}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
