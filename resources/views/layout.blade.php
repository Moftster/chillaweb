<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ChillaWeb - @yield('title')</title>

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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('icons/Chillalogo4.png')}}" width="50" height="50" class="d-inline-block align-top" alt="">
                    <div class="d-inline-block align-middle header-font">ChillaWeb</div> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Services</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" href="/portfolio">Portfolio</a>
                        </li>                                         
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>        
                        <li class="nav-item nav-quote-button">
                            <a href="/quote" class="btn btn-success ">Get a free quote</a>
                        </li>        
                        
                        


                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                            @if (Route::has('register'))                                     

                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @can('edit-users')
                                    <a href="/post" class="dropdown-item">Post</a>
                                    <a href="/myposts" class="dropdown-item">My Posts</a>
                                    @endcan
                                    @can('manage-users')
                                    <a href="{{ route('admin.users.index') }}" class="dropdown-item">User management</a>
                                    @endcan
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>




@show

<div class="container">
    @include('partials.alerts')
    @yield('content')
</div>

@section('footer')
<footer class="footer ">
    <div class="container">

        <div class="row d-flex justify-content-center">
            <a href="https://www.instagram.com/chillaweb/"><img class="social-icon" src="{{ asset('icons/insta.png') }}" alt="Instagram logo"></a>
            <a href="https://twitter.com/ChillaWeb"><img class="social-icon" src="{{ asset('icons/twitter.png') }}" alt="Twitter logo"></a>
            <a href="https://www.youtube.com/channel/UCYlZTdMURVPbf60rtldAX7g?view_as=subscriber"><img class="social-icon" src="{{ asset('icons/youtube.png') }}" alt="YouTube logo"></a>
        </div>

        <nav class="navbar navbar-expand-md navbar- justify-content-center">

            <div class="row">            
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="/services">Services</a>
                    </li>                        
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="/portfolio">Portfolio</a>
                    </li>                                         
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="/contact">Contact</a>
                    </li>                        
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="/blog">Blog</a>
                    </li>       
                </ul>
            </div>

        </nav>

    </div>
  </footer>
</div>

@yield('jsfile')

</body>
</html>
@show