<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/img/logo_szerkesztve.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Élethang Alapítmány</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div>
                        <img src="/img/logo_szerkesztve.png" alt="logo" style="width:35px;" class="rounded" width="45px">
                    </div>
                    <div style="margin-left: 20px; ">
                        Élethang Alapítvány
                    </div>    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">

                    </ul>                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Főoldal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/donation') }}">Adomány</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Örökbefogadás</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/adoption') }}">Tudnivalók</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item disabled" href="">Kutyák</a></li>
                                    <li><a class="dropdown-item disabled" href="">Macskák</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/aboutUs') }}">Rólunk</a>
                            </li>    

                            <li class="nav-item dropdown">
                                <img src="/img/profil.png" type="button" alt="profil" style="width:45px; height: 45px;" class="rounded-pill dropdown-toggle" data-bs-toggle="dropdown">
                                <ul class="dropdown-menu">
                                    @if (Route::has('login'))
                                        <li>
                                            <a style="color: black;" class="dropdown-item nav-link" href="{{ route('login') }}">Bejelentkezés</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li>
                                            <a  style="color: black;" class="dropdown-item nav-link" href="{{ route('register') }}">Regisztráció</a>
                                        </li>
                                    @endif
                                </ul>

                            </li>
                        @else
                        
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Főoldal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/donation') }}">Adomány</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Örökbefogadás</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/adoption') }}">Tudnivalók</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ url('/dogs') }}">Kutyák</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/cats') }}">Macskák</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/aboutUs') }}">Rólunk</a>
                            </li>    
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" style="text-align: center;" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ url('/profile') }}">
                                        Profil
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/pictures') }}">
                                        Képek
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/programs') }}">
                                        Programok
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Kijelentkezés
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container bejegyzesek">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container">
                        <main class="py-4">
                            @yield('content')
                        </main>
                    </div>
                </div>
                <div class="col-sm-12">

                    <div class="container">
                        <div class="container" style="text-align: center">
                                <br>
                                <h3>Számlaszámunk: OTP Bank Nyrt. 11705008-29915941 Élethang Alapítvány</h3>
                                <hr>
                                <img src="/img/adoKep.jpg" class="img-fluid " alt="ado" style="width:50%;">
                                <br><br>
                                <div>
                                    <a href="https://adjukossze.hu/kampany/elethang-alapitvany-telefonos-adomanygyujtes-1802" class="btn btn-outline-success btn-lg kozepre">Támogatásodat köszönjük!</a>
                                </div>
                        </div>    
                    </div>   
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
            <div class="container" style="color: white;">
                <a class="navbar-brand" href="https://www.instagram.com/elethang_alapitvany/">
                    <img src="/img/instagram.png" alt="Instagram" style="width:40px;" class="rounded-pill"> 
                </a>
                Készült
                <a class="justify-content-center" href="{{ url('/') }}">
                    <img src="/img/logo_szerkesztve.png" alt="logo" style="width:50px;" class="rounded-pill"> 
                </a>
                2022
                <a class="d-flex" href="https://www.facebook.com/Elethangalapitvany">
                    <img src="/img/facebook.png" alt="Facebook" style="width:40px;" class="rounded-pill"> 
                </a>
            </div>
        </nav> 
    </div>
</body>
</html>
