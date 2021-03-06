@extends('layouts.app')

@section('content')

{{-- RESUMEN ESTADISTICAS --}}
<div class="ui grid">
  <div class="six wide column">
    <h3 class="ui header">Cursos</h3>
    <div class="ui styled fluid accordion segment">
        @for($i=1;$i<=11;$i++)
        <?php
          if($i==1) $curso="Primero";
          if($i==2) $curso="Segundo";
          if($i==3) $curso="Tercero";
          if($i==4) $curso="Cuarto";
          if($i==5) $curso="Quinto";
          if($i==6) $curso="Sexto";
          if($i==7) $curso="Séptimo";
          if($i==8) $curso="Octavo";
          if($i==9) $curso="Noveno";
          if($i==10) $curso="Décimo";
          if($i==11) $curso="Once";
        ?>
          <div class="title ui orange segment"><i class="dropdown icon"></i>
            <a href="{{ route('observacionesdelcurso',$i)}}" >
              Curso {{$curso}}<span class="totalcurso">{{$total[$i]}}</span>
            </a>
          </div>
          
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
              @foreach($estudiantes[$i] as $estudiante)
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
                  {{-- <img src="{{asset('images/avatar/'.$estudiante->document.'.jpg')}}" class="avatar"> --}}
                </td>
                <td><h4 style="display:inline-block"><a href="{{ route('observerstudent',$estudiante->id)}}" >{{ $estudiante->name }}</a></h4>
                  <span class="link"><a href="{{ route('observerstudent',$estudiante->id)}}" ><i class="angle double right icon teal"></i></a></span>
                </td>
                <td>@if ($asistencia[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$asistencia[$i][$k]}} </h3> @endif</td>
                <td>@if ($puntualidad[$i][$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$puntualidad[$i][$k]}} </h3> @endif</td>
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
                <td><a href="{{ route('observer',$estudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
              </tr>
              <?php $k++; ?>
              @endforeach
            </table>
          </div>
        @endfor
        </div>
  </div>
  <div class="ten wide column">
    <h3 class="ui header">Resumen observador Colegio CEMA</h3>
    <!-- <table class="ui six celled striped small compact table"> -->
    <table class="ui small celled structured compact table">
      <thead>
        <tr>
          <th rowspan="2">Tipo de nota</th>
          <th colspan="4">Periodo</th>
          <th rowspan="2">Total</th>
        </tr>
        <tr>
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th>
        </tr>
      </thead>
      <tbody>
        <tr >
          <td >Comentarios</td>
          <td >{{$comentarios_1p}}
            <a href="{{ route('comentarios')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>
          </td>
          <td class="disabled">{{$comentarios_2p}}</td>
          <td class="disabled" class="disabled">{{$comentarios_3p}}
          </td>
          <td class="disabled">{{$comentarios_4p}}</td>
          <td>{{$comentarios}}</td>
        </tr>
        <tr>
          <td>Notificaciones</td>
          <td >{{$notificaciones_1p}}
            <a href="{{ route('notificaciones')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>
          </td>
          <td class="disabled">{{$notificaciones_2p}}</td>
          <td class="disabled" class="disabled">{{$notificaciones_3p}}
          </td>
          <td class="disabled">{{$notificaciones_4p}}</td>
          <td>{{$notificaciones}}</td>
        </tr>
        <tr>
          <td>Compromisos</td>
          <td >{{$compromisos_1p}}
          <a href="{{ route('compromisos')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>
          </td>
          <td class="disabled">{{$compromisos_2p}}</td>
          <td class="disabled" class="disabled">{{$compromisos_3p}}</td>
          <td class="disabled">{{$compromisos_4p}}</td>
          <td>{{$compromisos}}</td>
        </tr>
        <tr>
          <td>Sanciones</td>
          <td >{{$sancion_1p}}
          <a href="{{ route('sanciones')}}" class="ui tiny icon" style="display: inline-block !important">
          <i class="angle double right icon blue fz2em"></i></a>
          </td>
          <td class="disabled">{{$sancion_2p}}</td>
          <td class="disabled">{{$sancion_3p}}</td>
          <td class="disabled">{{$sancion_4p}}</td>
          <td>{{$sancion}}</td>
        </tr>
        <tr>
          <td>Matricula condicional</td>
          <td >{{$matricula_condicional_1p}}
            <a href="{{ route('matricula_condicional')}}" class="ui tiny icon" style="display: inline-block !important">
          <i class="angle double right icon blue fz2em"></i></a> 
          </td>
          <td class="disabled">{{$matricula_condicional_2p}}</td>
          <td class="disabled" class="disabled">{{$matricula_condicional_3p}}</td>
          <td class="disabled">{{$matricula_condicional_4p}}</td>
          <td>{{$matricula_condicional}}</td>
        </tr>
        <tr>
          <td>Remisión a comité de convivencia</td>
          <td >{{$remision_comite_convivencia_1p}}
            <a href="{{ route('comite_convivencia')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a> 
          </td>
          <td class="disabled">{{$remision_comite_convivencia_2p}}</td>
          <td class="disabled" class="disabled">{{$remision_comite_convivencia_3p}}</td>
          <td class="disabled">{{$remision_comite_convivencia_4p}}</td>
          <td>{{$remision_comite_convivencia}}</td>
        </tr>
        <tr>
          <td>Remisión al consejo académico</td>
          <td >{{$remision_consejo_academico_1p}}
            <a href="{{ route('consejo_academico')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>             
          </td>
          <td class="disabled">{{$remision_consejo_academico_2p}}</td>
          <td class="disabled" class="disabled">{{$remision_consejo_academico_3p}}</td>
          <td class="disabled">{{$remision_consejo_academico_4p}}</td>
          <td>{{$remision_consejo_academico}}</td>
        </tr>
        <tr>
          <td>Cancelación de matrícula</td>
          <td >{{$cancelacion_matricula_1p}}
            <a href="{{ route('cancelacion_matricula')}}" class="ui tiny icon" style="display: inline-block !important">
          <i class="angle double right icon blue fz2em"></i></a> 
          </td>
          <td class="disabled">{{$cancelacion_matricula_2p}}</td>
          <td class="disabled" class="disabled">{{$cancelacion_matricula_3p}}</td>
          <td class="disabled">{{$cancelacion_matricula_4p}}</td>
          <td>{{$cancelacion_matricula}}</td>
        </tr>
        <tr>
          <td>Remisión a orientación</td>
          <td >{{$remision_orientacion_1p}}
            <a href="{{ route('remision_orientacion')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a> 
          </td>
          <td class="disabled">{{$remision_orientacion_2p}}</td>
          <td class="disabled" class="disabled">{{$remision_orientacion_3p}}</td>
          <td class="disabled">{{$remision_orientacion_4p}}</td>
          <td>{{$remision_orientacion}}</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>Total Observaciones</th>
          <th >{{$totalobservaciones_1p}}</th>
          <th class="disabled">{{$totalobservaciones_2p}}</th>
          <th class="disabled">{{$totalobservaciones_3p}}</th>
          <th class="disabled">{{$totalobservaciones_4p}}</th>
          <th>{{$totalobservaciones}}</th>
        </tr>
      </tfoot>
    </table>
  </div>
    
</div>
  
  
  

  {{-- CIERRE CONTENEDOR ACORDEON    --}}

<h3 class="ui dividing header">Últimas observaciones</h3>
  <table class="ui celled striped small very compact table" id="table_id" class="display">
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
        <th>Curso</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($observations as $observation)
      <tr>
        <td>{{ $observation->id }}</td>
        <td>
            <a href="{{ route('observerstudent',$observation->user_id)}}" >
              {{ $observation->user->name }}</td>
            </a>
        <td>{{ $observation->observercategory->name }}</td>
        <td>{{ $observation->observerscene->name }}</td>
        <td>{{ $observation->observernote->name }}</td>
        <td>{{ $observation->created_at }}</td>
        <td>{{ $observation->observation }}</td>
        <td>
          {{ $observation->creator->name }}
        </td>

        <td>{{ $observation->course->name }}</td>

        <td>
          <a href="{{ route('observer.show', $observation->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
           
          @if(Auth::user()->id == 16)   
            <a href="{{ route('observer.edit', $observation->id)}}" class="ui tiny icon button" style="display:inline-block !important">
              <i class="edit blue icon"></i>
            </a>
            {!!Form::open(['route' => ['observer.destroy', $observation->id],
            'method' => 'DELETE']) !!}
            <button class="ui tiny icon button">
              <i class="cancel red icon"></i>
            </button>
            
            {!! Form::close() !!}
          @endif
          
        </td>
      </tr>
      @endforeach 
  
    </tbody>
    <tfoot>
      <tr>
        {{-- <th colspan="10">
            {{$observations->render()}}  
        </th> --}}
    </tr>
  </tfoot>
  </table>

  <br>
  <h4>Total estudiantes: <b>{{$totalstudents}}</b></h4>
  <br>
  <br>

@endsection

@section('scripts')
  <script>
    $('.ui.accordion')
      .accordion()
    ;

    $(document).ready( function () {
      $('#table_id').DataTable();
    } );
  </script>
@endsection
