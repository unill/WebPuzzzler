<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">




        <script src="{{ asset('/js/phaser2.js') }}"></script>
        <script src="{{ asset('/js/game/lib/utils.js') }}"></script>
        <script src="{{ asset('/js/game/screens/menu.js') }}"></script>

        <script src="{{ asset('/js/game/screens/splash.js') }}"></script>
        <script src="{{ asset('/js/game/boot.js') }}"></script>

        <script src="{{ asset('/js/game/screens/main.js') }}"></script>
        <script src="{{ asset('/js/game/statemanager.js') }}"></script>


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="gameDiv">


            </div>
        </div>
    </body>
</html>
