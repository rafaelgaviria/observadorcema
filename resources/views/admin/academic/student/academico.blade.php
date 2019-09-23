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
                        <li><a href="{{ route('miobservador') }}">
                          {{-- <i class="home icon"></i> --}}
                          Disciplinario</a></li>
                        <li><a href="{{ route('miobservadoracademico') }}">Académico</a></li>
     
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


<h2 class="ui dividing header">Observador académico grado {{$namecourse}}</h2>
  <table class="ui celled striped small very compact table">
      <thead>
          <tr>
            <th rowspan="2" class="text-center">Materia</th>
            <th colspan="3" class="text-center">1er. periodo</th>
            <th colspan="3" class="text-center">2do. periodo</th>
            <th colspan="3" class="text-center">3er. periodo</th>
            <th colspan="3" class="text-center">4to. periodo</th>
          </tr>
          <tr>
            <th class="text-center">1<br>Mar. 1</th>
            <th class="text-center">2<br>Mar. 22</th>
            <th class="text-center">3<br>Abr. 12</th>
            <th class="text-center">4<br>May. 10</th>
            <th class="text-center">5<br>May. 31</th>
            <th class="text-center">6<br>Jun. 14</th>
            <th class="text-center">7<br>Ago. 2</th>
            <th class="text-center">8<br>Ago. 23</th>
            <th class="text-center">9<br>Sep. 20</th>
            <th class="text-center">10<br>Oct. 18</th>
            <th class="text-center">11<br>Nov. 1</th>
            <th class="text-center">12<br>Nov. 15</th>
          </tr>
        </thead>
    <tbody>
      @php 
        $negativo="X"  
      @endphp
      @foreach($ob_academics as $ob_academic)
        <tr>
            <td>
                <h3 data-tooltip="id = {{ $ob_academic->materia->id }}" data-position="top left">{{ $ob_academic->materia->name }}</h3>
                <p data-tooltip="id = {{ $ob_academic->profesor->id }}" data-position="top left" data-inverted="">{{ $ob_academic->profesor->name }}</p> 
                
                </h4>
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_01 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_02 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_03 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_04 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_05 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_06 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_07 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_08 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_09 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
  </table>

  <br>
  <br>
  <br>



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
