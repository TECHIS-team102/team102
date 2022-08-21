<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
<<<<<<< HEAD

=======
    <title>{{ config('app.name', 'Laravel') }}</title>
>>>>>>> ceb82d4084fa0fc602a7b01f78ca18ad198b3742
 
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
    <!-- Styles -->
<<<<<<< HEAD
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
=======
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
>>>>>>> ceb82d4084fa0fc602a7b01f78ca18ad198b3742
</head>
 
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
<<<<<<< HEAD
                
 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
=======
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="dropdown" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
>>>>>>> ceb82d4084fa0fc602a7b01f78ca18ad198b3742
 
                    </ul>
 
                    <!-- Right Side Of Navbar -->
<<<<<<< HEAD
                    <ul class="navbar-nav ml-auto">
=======
                    <ul class="navbar-nav ms-auto">
>>>>>>> ceb82d4084fa0fc602a7b01f78ca18ad198b3742
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
 
                        @if (Route::has('register'))
<<<<<<< HEAD
                        <li class="nav-item a r">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('>>登録') }}</a>
=======
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
>>>>>>> ceb82d4084fa0fc602a7b01f78ca18ad198b3742
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
<<<<<<< HEAD
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
=======
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
>>>>>>> ceb82d4084fa0fc602a7b01f78ca18ad198b3742
                                {{ Auth::user()->name }}
                            </a>
 
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
<<<<<<< HEAD
                                                        document.getElementById('logout-form').submit();">
=======
                                                     document.getElementById('logout-form').submit();">
>>>>>>> ceb82d4084fa0fc602a7b01f78ca18ad198b3742
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
 
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<<<<<<< HEAD
 
=======
>>>>>>> ceb82d4084fa0fc602a7b01f78ca18ad198b3742
</html>