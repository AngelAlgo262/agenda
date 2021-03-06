<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Favicon inicio-->
    <link rel="shortcut icon" href="/public/calendar.png">
<!--Favicon fin-->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Guardia') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
<script type="text/javascript">
    var baseURL= {!! json_encode(url('/'))!!}
</script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    @if (Auth::check())
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
             <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Guardia') }}
                </a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>
                    <!--Menu-->
                    
                        @can('Listado de consultores')
                        <li class="nav-item list-unstyled navbar-brand ">
                                    <a class="nav-link" href="{{ route('consultor.index') }}">{{ __('Consultor') }}</a>
                                </li>
                        @endcan
                        @can('Listado de tiempos')
                        <li class="nav-item list-unstyled navbar-brand">
                                    <a class="nav-link" href="{{ route('tiempo.index') }}">{{ __('Tiempo') }}</a>
                                </li>
                        @endcan
                        @can('Listado de roles')
                        <li class="nav-item list-unstyled navbar-brand">
                                    <a class="nav-link" href="{{ route('role.index') }}">{{ __('Roles') }}</a>
                                </li>
                        @endcan
                        @can('Listado de usuarios')
                        <li class="nav-item list-unstyled navbar-brand">
                                    <a class="nav-link" href="{{ route('user.index') }}">{{ __('Usuarios') }}</a>
                                </li>
                        @endcan
                    @endif
                    <!--Fin Menu-->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <!-- @guest
                             @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                             @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Crear usuario') }}</a>
                                </li>
                            @endif 
                        @else-->
                            <li class="nav-item dropdown"> 
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        <!--Para llamar js de fullcalendar-->
        <script src="{{ asset('js/agenda.js') }}" defer></script>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
