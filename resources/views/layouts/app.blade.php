<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Meatway admin</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .dropdown-item:hover {
        background-color: #e97878;
        color: white;
    }

</style>

<body style="background-color: #30475e;">
    <div id="app" >
        <!-- As a heading -->
        <nav class="navbar navbar-light navbar-fixed-top " style="height: 40px;background-color: #c70039;">
            <span class="p text-light text-center" style="width: 100%;">{{$filter}}</span>
        </nav>
        <nav class="navbar navbar-expand-md shadow-sm navbar-dark" style="background-color: #ec4646;">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link text-light" href="/add-new">
                                Add new order
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Orders
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown text-light"
                                style="background-color: #ec4646;">
                                <a class="dropdown-item text-light" href="/orders-main">All</a>
                                <a class="dropdown-item text-light" href="/orders-pending">Pending</a>
                                <a class="dropdown-item text-light" href="/orders-done">Done</a>
                                <a class="dropdown-item text-light" href="/orders-cancelled">Cancelled</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="/history">
                                History
                            </a>

                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" >
            @yield('content')
        </main>
    </div>
</body>

</html>
