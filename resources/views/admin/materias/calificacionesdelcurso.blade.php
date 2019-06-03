@extends('layouts.app')

@section('content')

  {{-- RESUMEN ESTADISTICAS --}}
  <a href="{{ URL::previous() }}"><i class="angle left icon fz2em"></i> Regresar</a><br><br>
  <div class="ui grid">
    <div class="wide column">
      <h1 class="ui header">Observador académico {{ $curso }}</h1>
    </div>    
  </div>
  <br>

  
  
  @php
    $i = 1;
  @endphp    
    <div class="content">
      {{-- <table class="ui celled striped small compact table rowfix headerfix">
        <thead>
          <tr>
            <th width="68px"><h4>Foto</h4></th>
            <th width="250px"><h4>Nombres</h4></th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T3</h4></th>
            <th><h5>Sanciones</h5></th>
            <th><h5>Matrícula condicional</h5></th>
            <th><h5>Cancelación</h5></th>
            <th><h4>Acudiente</h4></th>
            <th width="130px"><h4>Crear</h4></th>
          </tr>
        </thead>
      </table> --}}
      <table class="ui celled striped small compact table rowfix">
        <thead>
          <tr>
            <th><h4>Foto</h4></th>
            <th><h4>Nombres</h4></th>
            <th><h4>CP-1</h4></th>
            <th><h4>CP-2</h4></th>
            <th><h4>CP-3</h4></th>
            <th><h4>CP-4</h4></th>
            <th><h4>CP-5</h4></th>
            <th><h4>CP-6</h4></th>
            <th><h4>CP-7</h4></th>
            <th><h4>CP-8</h4></th>
            <th><h4>CP-9</h4></th>
            <th><h4>CP-10</h4></th>
            <th><h4>CP-11</h4></th>
            <th><h4>CP-12</h4></th>
            
        
          </tr>
        </thead>
        <?php 
          $k=0;
          $nada="-" ?>
        @foreach($estudiantes[$i] as $estudiante)
        <tr>
          <td class="one wide">
              @php
              $foto = public_path().'/images/avatar/'.$estudiante->document.'.jpg';
            @endphp
            @if(file_exists($foto))
              <img src="{{asset('images/avatar/'.$estudiante->document.'.jpg')}}" class="avatar" style="width: 48px; height:45px">
            @else
              <img src="{{asset('images/avatar/user.png')}}" class="avatar" style="width: 48px; height:45px">
            @endif  
            {{-- <img src="{{asset('images/avatar/'.$estudiante->document.'.jpg')}}" class="avatar"> --}}
          </td>
          <td class="four wide"><h4 style="display:inline-block"><a href="{{ route('calificacionesdelestudiante',$estudiante->id)}}" >{{ $estudiante->name }}</a></h4>
            <span class="link"><a href="{{ route('observerstudent',$estudiante->id)}}" ><i class="angle double right icon teal"></i></a></span>
          </td>
          {{-- <td>@if ($numero_estudiantes_calificados[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$numero_estudiantes_calificados[$i][$k]}} </h3> @endif</td> --}}
          
          <td>@if ($cp_01[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_01[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_02[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_02[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_03[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_03[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_04[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_04[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_05[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_05[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_06[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_06[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_07[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_07[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_08[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_08[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_09[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_09[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_10[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_10[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_11[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_11[$i][$k]}} </h3> @endif</td>
          <td>@if ($cp_12[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cp_12[$i][$k]}} </h3> @endif</td>
          {{-- 
          <td>@if ($presentacion_personal[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$presentacion_personal[$i][$k]}} </h3> @endif</td>
          <td>@if ($cumplimiento_tareas[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cumplimiento_tareas[$i][$k]}} </h3> @endif</td>
          <td>@if ($circulares[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$circulares[$i][$k]}} </h3> @endif</td>
          <td>@if ($tipo_1[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$tipo_1[$i][$k]}} </h3> @endif</td>
          <td>@if ($tipo_2[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$tipo_2[$i][$k]}} </h3> @endif</td>
          <td>@if ($tipo_3[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$tipo_3[$i][$k]}} </h3> @endif</td>
          <td>@if ($sanciones[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$sanciones[$i][$k]}} </h3> @endif</td>

          <td></td>
          <td></td>
          <td>@if ($acudiente[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:blue; text-align:center"> {{$acudiente[$i][$k]}} </h3> @endif</td>
          <td class="two wide"><a href="{{ route('observer',$estudiante->id)}}" class="ui mini green button">Crear</a></td> --}}
        </tr>
        <?php $k++; ?>
        @endforeach
      </table>
    </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  

@endsection

@section('scripts')
  <script>

  </script>
@endsection
