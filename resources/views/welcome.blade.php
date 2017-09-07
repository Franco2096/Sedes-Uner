<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UNER</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #302F4A;
                color: white;
                font-family: 'Open Sans', Arial, sans-serif;
                font-size: 14px;
                line-height: 1.5em;
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
                font-size: 12px;
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
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Pagina principal</a>
                    @else
                        <a href="{{ url('/login') }}">Iniciar sesión</a>
                        <a href="{{ url('/register') }}" >Registrarse</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    UNER
                </div>

                <div class="links">
                    <a href="http://www.fb.uner.edu.ar">Facultad de Bromatología</a>
                </div>
            </div>
        </div>
    </body>
</html>
