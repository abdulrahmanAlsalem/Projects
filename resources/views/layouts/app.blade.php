<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
</head>
<body>
    <div id="app">
        <div class="header">
            <a class="logo" href="/"><img src="{{ asset('logo.png')}}" alt="logo" style="width: auto; height: 60px;"></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="#">Home</a></li>
                    @auth
                    <li><a href="#">Events</a></li>
                    
                    <li><a href="{{ asset('volProfile.blade.php') }}">Profile</a></li>
                    @endauth
                    <li><a href="#">contact us</a></li>
                </ul>
    
            </nav>
            <div class="btns">
                @guest
                
                    <a class="btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                
                @if (Route::has('register'))
                    
                        <a class="btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                    
                @endif
            @else
                
                    <a id="navbarDropdown" class="hello" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    
                        <a class="btn" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    
                
            @endguest
                {{-- <a class="hello" href=#>Hello Khalid </a>
                <a class="btn" href="/signin.html">Log out</a>  --}}
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                
            </div>
    
        </div>
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Volunteering Platform
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <!-- Scripts -->
     <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/browser.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/breakpoints.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
