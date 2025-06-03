<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PokeDex</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        @vite(['resources/css/home-page.css'])
        <style>
            body {
                background: 
                    linear-gradient(rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.02)),
                    url('/build/assets/imgs/wp-pokemon.jpg') no-repeat center center fixed;
                background-size: cover;
                font-family: 'Poppins';
                display: flex;
                flex-direction: column;
            }
        </style>
    </head>
    <body>
        <header>
            @if (Route::has('login'))
                <nav>
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        @if (Route::has('login'))
            <div></div>
        @endif
    </body>
</html>