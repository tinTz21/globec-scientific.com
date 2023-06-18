<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Globec Scientific Ltd') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="bg-light">
            {{-- Maranatha --}}
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid" style="padding: 1em;">
                        <a class="navbar-brand" href="/">
                          <img src="/images/logo.jpg" width="100em">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                @if(Auth::user())
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" style="color: #000000;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" style="color: #000000;" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endif
                            </ul>
                        </div>
                    </div>
                </nav>
        </div>


        <main class="py-2">
            <div class="container-fluid" style="background-color: #017C7A;">
                <div class="row">
                        @include('layouts.menu')
                    <div class="col-md-9 d-flex justify-content-center">
                        @yield('content')
                    </div>
                    @if(Auth::user())
                        @livewire('home.footer')
                    @endif
                </div>
            </div>
        </main>
    </div>
</body>
</html>
