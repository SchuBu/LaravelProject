<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/appStyle.css') }}" rel="stylesheet">
    <script src="{{ asset('fontawesome/js/fontawesome-all.js') }}"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                @auth
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link" href="#">Einstellungen <i class="far fa-cog"></i></a></li>

                </ul>
                @endauth

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}"><i class="far fa-user fa-fw"></i> {{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}"><i class="far fa-user fa-fw"></i> {{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="far fa-user fa-fw"></i>
                                {{ Auth::user()->name }} ({{ Auth::user()->getRoles() }}) <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><i class="far fa-id-card-alt fa-fw"></i> Profil bearbeiten</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="far fa-power-off fa-fw"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container-fluid">

            <div class="row">
                @auth
                <div class="col sidebar d-none d-md-block">
                    <div class="card">
                        <div class="card-header">
                            Navigation
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">Aktion 1</a>
                            <a href="#" class="list-group-item list-group-item-action">Aktion 2</a>
                            <a href="#" class="list-group-item list-group-item-action">Aktion 3</a>
                            <a href="#" class="list-group-item list-group-item-action">Aktion 4</a>
                            <a href="#" class="list-group-item list-group-item-action">Aktion 5</a>

                        </div>
                    </div>
                </div>
                @endauth

                <div class="col">
                    @if(Session::has('message'))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</div>
                            </div>
                        </div>
                    @endif

                    @yield('content')
                </div>

            </div>


        </div>
    </main>
</div>
</body>
</html>
