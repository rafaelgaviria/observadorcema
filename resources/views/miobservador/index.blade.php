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
@section('content')

    {{--  <h2><strong>Detalle Observación:</strong> {{ $observation->user->name }}</h2>
    <h2><strong>Curso:</strong> {{ $observation->course->name }}</h2>  --}}
  {{-- RESUMEN ESTADISTICAS --}}
  <div class="ui statistics">
    <div class="blue statistic">
      <div class="value">
       {{-- {{$totalobservaciones}} --}}
      </div>
      <div class="label">Observaciones</div>
    </div>
  </div>
  <h2 class="ui dividing header">Observador</h2>

  
  
  

<h2 class="ui dividing header">Últimas observaciones</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombres</th>
        <th>Tipo</th>
        <th>Escenario</th>
        <th>Nota</th>
        <th>Fecha</th>
        <th>Comentario</th>
        <th>Autor</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
   {{--  @foreach($observations as $observation) --}}
      <tr>
        <td>{{-- {{ $observation->id }} --}}</td>
        <td>{{-- {{ $observation->user->name }} --}}</td>
        <td>{{-- {{ $observation->observertype->name }} --}}</td>
        <td>{{-- {{ $observation->observerscene->name }} --}}</td>
        <td>{{-- {{ $observation->observernote->name }} --}}</td>
        <td>{{-- {{ $observation->created_at }} --}}</td>
        <td>{{-- {{ $observation->observation }} --}}</td>
        <td>{{-- {{ $observation->creator->name }} --}}</td>
        

        <td>
        {{--  
          <a href="{{-- {{ route('observer.show', $observation->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
          <a href="{{ route('observer.edit', $observation->id)}}" class="ui tiny icon button" style="display:inline-block !important">
            <i class="edit blue icon"></i>
          </a>
        
          {!!Form::open(['route' => ['observer.destroy', $observation->id],
          'method' => 'DELETE']) !!}
          <button class="ui tiny icon button">
            <i class="cancel red icon"></i>
          </button>
          {!! Form::close() !!}
          --}}
        </td>
      </tr>
      {{--
      @endforeach 
      --}}
    </tbody>
    <tfoot>
      <tr>
        <th colspan="10">
          {{--  {{$observations->render()}}  --}}
        </th>
    </tr>
  </tfoot>
  </table>
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


    
    
</body>



