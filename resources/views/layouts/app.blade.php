<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'WORKS') }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>

</head>

<body>
    <div id="app">
        <!-- <div class="position-fixed w-100 bg-white">
        @if ( request()->is('*clinicals*') || request()->is('*reservations*') )
        <form method="POST" action="{{route('clinicals.search')}}" class="search_form">
            {{csrf_field()}}
            <label>
                <input type="search" class="" name="search" value="" placeholder="search" aria-label="検索...">

            </label>
        </form>
        @else
        @endif
        </div> -->


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div id="sp_fixed_menu" class="for-sp">
        <ul>
            <li><a href=""><i class="fa-solid fa-house fa-2x footer_icon_color"></i></a></li>
            <li><a href="{{route('clinicals.index')}}"><i
                        class="fa-solid fa-magnifying-glass fa-2x footer_icon_color"></i></a></li>
            <li class="create_button"><a href="{{route('clinicals.index')}}"><i
                        class="fa-solid fa-circle-plus fa-3x footer_icon_color"></i></i></a></li>
            <li><a href="{{route('reservations.index')}}"><i
                        class="fa-regular fa-clipboard fa-2x footer_icon_color"></i></a></li>
            <li><a href="{{route('reservations.index')}}"><i class="fa-solid fa-list fa-2x footer_icon_color"></i></a>
            </li>
        </ul>
    </div>

    
                <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    
    
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
</body>
</html>