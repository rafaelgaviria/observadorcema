<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <script>
        $('.message .close')
            .on('click', function() {
            $(this)
                .closest('.message')
                .transition('fade')
            ;
            })
        ;
    </script>
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="ui container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{--  {{ config('app.name', 'Laravel') }}  --}}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
                        @else
                        
                                <li><a href="{{ route('observer.index') }}"><i class="home icon"></i> Inicio</a></li>
                                {{-- <li><a href="{{ route('observer.index') }}"></i>Docentes</a></li> --}}
                                <li><a href="{{ route('micurso') }}">Mi Curso</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="ui container">
            {{--  <div class="ui info message">
                <p>Plataforma para la gestión del observador del colegio Estrada María Auxiliadora. Versión 0.1</p>
            </div>  --}}

            @if(session('info')) 
            <div class="ui positive message">
                <i class="close icon"></i>
                <div class="header">
                    {{ session('info') }}
                </div>
                {{--<p>Go to your <b>special offers</b> page to see now.</p>--}}
            </div>            
            @endif

            @if(count($errors))
            <div class="ui error message">
                <i class="close icon"></i>
                <div class="header">Por favor revise la siguiente información:</div>
                <ul class="list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    
                    @endforeach
                </ul>
            </div> 
            @endif


            

            @yield('content')
        </div>
        
    </div>
    <div class="ui black inverted vertical footer segment"></div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>

  <script>
    $('.message .close')
    .on('click', function() {
      $(this)
      .closest('.message')
      .transition('fade')
      ;
    })
    ;
  </script>

    @yield('scripts')
    
    
</body>
</html>
