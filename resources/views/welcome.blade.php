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

                color: #ffffff;
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
                font-size: 50px;
            }

            .links > a {
                color: #ffffff;
                padding: 0 60px;
                font-size: 20px;
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
                        <a href="{{ url('/home') }}">Главная</a>
                    @else
                        <a href="{{ route('login') }}">Войти</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Добро пожаловать! </br>
                    Войдите, чтобы узнать курс валют!

                </div>

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
            </div>
        </div>


        <script src="{{ URL::to('js/jquery.js') }}"></script>
        <script src="{{ URL::to('js/jquery.backgroundvideo.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                var videobackground = new $.backgroundVideo($('body'), {
                    "align": "centerXY",
                    "width": 1280,
                    "height": 720,
                    "path": "video/",
                    "filename": "finance",
                    "types": ["mp4","ogg","webm"],
                    "preload": true,
                    "autoplay": true,
                    "loop": true
                });
            });
        </script>
    </body>
</html>
