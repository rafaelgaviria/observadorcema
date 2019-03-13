@extends('layouts.app')

@section('content')
<a href="{{ URL::previous() }}"><i class="angle left icon fz2em"></i> Regresar</a>
  {{-- RESUMEN ESTADISTICAS --}}
  <div class="ui statistics">
    <div class="blue statistic">
      <div class="value">
        {{$totalobservaciones}}
      </div>
      <div class="label">Total Observaciones</div>
    </div>
    
    {{-- <a href="{{ route('suspendidos')}}">
      <div class="red statistic">
        <div class="value">
          {{$totalsanciones}}
        </div>
        <div class="label">Suspensiones</div>
      </div>
    </a> --}}
    
    <div class="green statistic">
      <div class="value">
        {{$totalobservacionesacudientes}}
      </div>
      <div class="label">Notas a acudientes</div>
    </div>
  </div>
  
    <div class="title ui orange segment"><h2>Curso {{$namecourse}}</h2></div>
    <div class="content">
        <table class="ui celled striped small compact table rowfix">
            <thead>
              <tr>
                <th><h4>Foto</h4></th>
                <th><h4>Nombres</h4></th>
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
                <th><h4>Crear</h4></th>
              </tr>
            </thead>
            <?php 
              $k=0;
              $nada="-" ?>
            @foreach($estudiantes as $estudiante)
            <tr>
              <td>
                  @php
                  $foto = public_path().'/images/avatar/'.$estudiante->document.'.jpg';
                @endphp
                @if(file_exists($foto))
                  <img src="{{asset('images/avatar/'.$estudiante->document.'.jpg')}}" class="avatar" style="width: 48px; height:45px">
                @else
                  <img src="{{asset('images/avatar/user.png')}}" class="avatar" style="width: 48px; height:45px">
                @endif  
                
              </td>
              <td><h4 style="display:inline-block"><a href="{{ route('observerstudent',$estudiante->id)}}" >{{ $estudiante->name }}</a></h4>
                <span class="link"><a href="{{ route('observerstudent',$estudiante->id)}}" ><i class="angle double right icon teal"></i></a></span>
              </td>
              <td>@if ($asistencia[$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$asistencia[$k]}} </h3> @endif</td>
              <td>@if ($puntualidad[$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$puntualidad[$k]}} </h3> @endif</td>
              <td>@if ($presentacion_personal[$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$presentacion_personal[$k]}} </h3> @endif</td>
              <td>@if ($cumplimiento_tareas[$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$cumplimiento_tareas[$k]}} </h3> @endif</td>
              <td>@if ($circulares[$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$circulares[$k]}} </h3> @endif</td>
              <td>@if ($tipo_1[$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$tipo_1[$k]}} </h3> @endif</td>
              <td>@if ($tipo_2[$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$tipo_2[$k]}} </h3> @endif</td>
              <td>@if ($tipo_3[$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$tipo_3[$k]}} </h3> @endif</td>
              <td></td>
              <td></td>
              <td></td>
              <td>@if ($acudiente[$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:blue; text-align:center"> {{$acudiente[$k]}} </h3> @endif</td>
              <td><a href="{{ route('observer',$estudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
            </tr>
            <?php $k++; ?>
            @endforeach
          </table>
    </div>
    
   {{-- CIERRE CONTENEDOR ACORDEON    --}}

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
      @foreach($observations as $observation)
      <tr>
        <td>{{ $observation->id }}</td>
        <td>{{ $observation->user->name }}</td>
        <td>{{ $observation->observertype->name }}</td>
        <td>{{ $observation->observerscene->name }}</td>
        <td>{{ $observation->observernote->name }}</td>
        <td>{{ $observation->created_at }}</td>
        <td>{{ $observation->observation }}</td>
        <td>{{ $observation->creator->name }}</td>

        <td>
          <a href="{{ route('observer.show', $observation->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a> 
          
          {{-- <a href="{{ route('observer.edit', $observation->id)}}" class="ui tiny icon button" style="display:inline-block !important">
            <i class="edit blue icon"></i>
          </a> --}}
              
          {{-- {!!Form::open(['route' => ['observer.destroy', $observation->id],
          'method' => 'DELETE']) !!}
          <button class="ui tiny icon button">
            <i class="cancel red icon"></i>
          </button>

          {!! Form::close() !!} --}}
          
         </td>
      </tr>
      @endforeach 
  
    </tbody>
    <tfoot>
      <tr>
        <th colspan="10">
            {{$observations->render()}}  
        </th>
    </tr>
  </tfoot>
  </table>

  <br>
  <br>
  <br>
  


@endsection

@section('scripts')
  <script>
    $('.ui.accordion')
      .accordion()
    ;
  </script>
@endsection
