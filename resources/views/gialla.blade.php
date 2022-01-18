<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>terza</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #76520e;
                color: #636b6f;
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
                color: #ffe169;
            }

            .links > a {
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .a {
                color: #926c15
            }

            .b {
                color: #a47e1b
            }

            .c {
                color: #b69121
            }

            .d {
                color: #c9a227
            }

            .e {
                color: #dbb42c
            }

            .f {
                color: #edc531
            }

            .g {
                color: #fad643
            }

            .h {
                color: #ffe169
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
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Attila
                </div>

                <div class="links">
                    <a class="a" href="/">Atrocità</a>
                    <a class="b" href="/">Terremoto</a>
                    <a class="c" href="/">Tragedia</a>
                    <a class="d" href="/">Iradiddio</a>
                    <a class="e" href="/">Lago di sangue</a>
                    <a class="f" href="/">Adesso vengo lì e ti spezzo le</a>
                    <a class="g" href="/">Corna</a>
                    <a class="h" href="/">Sbabbari</a>
                </div>
            </div>
        </div>
    </body>
</html>

