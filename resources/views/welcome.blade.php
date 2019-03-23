<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("/image/BgBooking.jpg");
                background-size: cover;
                color: #fff;
                font-family: 'Georgia, serif';
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
                font-size: 100px;
                text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em blue;
                color: white;
                font: 8em 'Luckiest Guy', cursive;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: underline;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            a{
                color:#fff;
                text-decoration: none;
            }
            footer {
                padding: 15px;
                margin-top: 0px;
                width: 100%;
                background: transparent;
                text-align: center;
                color: grey;
                height: auto;
                position: absolute;
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
                    <a href="/home"> Booking</a>
                </div>

               <!-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>

        <footer>
                <p>Copyright &copy; 2019 Hadderingh. Alle rechten voorbehouden.</p>
            </footer>

    </body>
</html>
