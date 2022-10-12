<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Carfleet Management System')}}</title>

        <link href="{{ asset('css/app.css')}}" rel="stylesheet">

        <script src = "{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <!-- navbar !-->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">{{ config('app.name', 'Carfleet Management System') }}</a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="form-inline my-2 my-lg-0">
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none">
                                    @csrf
                                </form>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>
        
        @can('logged-in')
        <!-- navbar !-->
        <nav class="navbar sub-nav navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users.index') }}">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @endcan
        <!-- navbar !-->
        
        <main class="container">
            @include('partials.alerts')
            @yield('content')
        </main>
    </body>
</html>
