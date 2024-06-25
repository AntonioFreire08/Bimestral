<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="display: flex; flex-direction: row">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        style="background-color: black;
                                               border-radius: 10px;
                                               width:100px;
                                               height:40px;  
                                               text-align:center;
                                               display:flex;
                                               justify-content:center;
                                               align-items:center;"
                                        
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        style="background-color: #FF2D20
                                               border-radius: 10px;
                                               width:100px;
                                               height:40px;  
                                               text-align:center;
                                               display:flex;
                                               justify-content:center;
                                               align-items:center;"
                                        id="login"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            style="background-color: aqua"
                                            id="registro"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <div id="filter">
                        
                    </div>
                    <div style="display: flex; flex-direction:column; width:900px; height:70vh; align-self: center; justify-content:center; align-items:center; text-align: center;">
                        <img src="img/logo-kimetsu.png" alt="" style="width:400px; height:400px; display:flex;">
                        <h3 style="width: 400px; color:white;">Os fortes devem ajudar e proteger os fracos. Então, os fracos se tornarão fortes e, por sua vez, ajudarão e protegerão os mais fracos do que eles. Essa é a lei da natureza.</h3>
                    </div>
                    <img src="img/Tanjee0.png" alt="" srcset="" style="width: 950px; height 400px; align-self: end; display: flex; margin-top: 60px;" id="Tanjirou">
                    
    </body>
</html>
