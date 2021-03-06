<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>seconda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #641220;
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
                color: #da1e37;
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
                color: #85182a
            }

            .b {
                color: #a11d33
            }

            .c {
                color: #a71e34
            }

            .d {
                color: #b21e35
            }

            .e {
                color: #bd1f36
            }

            .f {
                color: #da1e37
            }

            .g {
                color: #bd1f36
            }

            .h {
                color: #85182a
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
                    Seconda
                </div>

                <div class="links">
                    <a class="a" href="/">Pdor</a>
                    <a class="b" href="/">Kmer</a>
                    <a class="c" href="/">Cose</a>
                    <a class="d" href="/">Delle Cose</a>
                    <a class="e" href="/">Aieie</a>
                    <a class="f" href="/">Antani</a>
                    <a class="g" href="/">Peppa</a>
                    <a class="h" href="/gialla">Franco</a>
                </div>
            </div>
        </div>
    </body>
</html>

