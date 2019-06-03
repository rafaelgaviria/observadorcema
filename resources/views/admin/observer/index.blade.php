@extends('layouts.app')

@section('content')

{{-- RESUMEN ESTADISTICAS --}}
<div class="ui grid">
  <div class="six wide column">
    <h3 class="ui header">Cursos</h3>
    <table class="ui celled striped small very compact selectable table" id="table_id" class="display">
      <thead>
        <tr>
          <th >Curso</th>
          <th >Observador</th>
          <th >Académico</th>
          <th >Estudiantes</th>
        </tr>
      </thead>
      <tbody>
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
        <tr>
          <td>{{$curso}}</td>
          <td><a href="{{ route('observacionesdelcurso',$i)}}" >
            <i class="eye icon"></i>
            <span>{{$total[$i]}}</span>
            </a>
          </td>
          <td>
            <a href="{{ route('calificacionesdelcurso',$i)}}" >
              <i class="book icon"></i>
              <span>{{$numero_estudiantes_calificados[$i]}}</span>
            </a>
          </td>
          <td><span class="totalcurso">{{$numero_estudiantes[$i]}}</span></td>
        </tr>
        @endfor
      </tbody>
    </table>
    
    
  </div>
  <div class="ten wide column">
    <h3 class="ui header">Resumen observador Colegio CEMA</h3>
    <!-- <table class="ui six celled striped small compact table"> -->
    <table class="ui small celled structured compact selectable table">
      <thead>
        <tr>
          <th rowspan="2" class="six wide">Tipo de nota</th>
          <th colspan="4" class="two wide">Periodo</th>
          <th rowspan="2" class="two wide">Total</th>
        </tr>
        <tr>
          <th class="two wide">1</th>
          <th class="two wide">2</th>
          <th class="two wide">3</th>
          <th class="two wide">4</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Comentarios</td>
          <td class="disabled">{{$comentarios_1p}}
            <a href="{{ route('comentarios')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>
          </td>
          <td>{{$comentarios_2p}}</td>
          <td class="disabled" class="disabled">{{$comentarios_3p}}
          </td>
          <td class="disabled">{{$comentarios_4p}}</td>
          <td>{{$comentarios}}</td>
        </tr>
        <tr>
          <td>Notificaciones</td>
          <td class="disabled">{{$notificaciones_1p}}
            <a href="{{ route('notificaciones')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>
          </td>
          <td>{{$notificaciones_2p}}</td>
          <td class="disabled" class="disabled">{{$notificaciones_3p}}
          </td>
          <td class="disabled">{{$notificaciones_4p}}</td>
          <td>{{$notificaciones}}</td>
        </tr>
        <tr>
          <td>Compromisos</td>
          <td class="disabled">{{$compromisos_1p}}
          <a href="{{ route('compromisos')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>
          </td>
          <td>{{$compromisos_2p}}</td>
          <td class="disabled" class="disabled">{{$compromisos_3p}}</td>
          <td class="disabled">{{$compromisos_4p}}</td>
          <td>{{$compromisos}}</td>
        </tr>
        <tr>
          <td>Sanciones</td>
          <td class="disabled">{{$sancion_1p}}
          <a href="{{ route('sanciones')}}" class="ui tiny icon" style="display: inline-block !important">
          <i class="angle double right icon blue fz2em"></i></a>
          </td>
          <td>{{$sancion_2p}}</td>
          <td class="disabled">{{$sancion_3p}}</td>
          <td class="disabled">{{$sancion_4p}}</td>
          <td>{{$sancion}}</td>
        </tr>
        <tr>
          <td>Matricula condicional</td>
          <td class="disabled">{{$matricula_condicional_1p}}
            <a href="{{ route('matricula_condicional')}}" class="ui tiny icon" style="display: inline-block !important">
          <i class="angle double right icon blue fz2em"></i></a> 
          </td>
          <td >{{$matricula_condicional_2p}}</td>
          <td class="disabled" class="disabled">{{$matricula_condicional_3p}}</td>
          <td class="disabled">{{$matricula_condicional_4p}}</td>
          <td>{{$matricula_condicional}}</td>
        </tr>
        <tr>
          <td>Remisión a comité de convivencia</td>
          <td class="disabled">{{$remision_comite_convivencia_1p}}
            <a href="{{ route('comite_convivencia')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a> 
          </td>
          <td >{{$remision_comite_convivencia_2p}}</td>
          <td class="disabled" class="disabled">{{$remision_comite_convivencia_3p}}</td>
          <td class="disabled">{{$remision_comite_convivencia_4p}}</td>
          <td>{{$remision_comite_convivencia}}</td>
        </tr>
        <tr>
          <td>Remisión al consejo académico</td>
          <td class="disabled">{{$remision_consejo_academico_1p}}
            <a href="{{ route('consejo_academico')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>             
          </td>
          <td >{{$remision_consejo_academico_2p}}</td>
          <td class="disabled" class="disabled">{{$remision_consejo_academico_3p}}</td>
          <td class="disabled">{{$remision_consejo_academico_4p}}</td>
          <td>{{$remision_consejo_academico}}</td>
        </tr>
        <tr>
          <td>Cancelación de matrícula</td>
          <td class="disabled">{{$cancelacion_matricula_1p}}
            <a href="{{ route('cancelacion_matricula')}}" class="ui tiny icon" style="display: inline-block !important">
          <i class="angle double right icon blue fz2em"></i></a> 
          </td>
          <td >{{$cancelacion_matricula_2p}}</td>
          <td class="disabled" class="disabled">{{$cancelacion_matricula_3p}}</td>
          <td class="disabled">{{$cancelacion_matricula_4p}}</td>
          <td>{{$cancelacion_matricula}}</td>
        </tr>
        <tr>
          <td>Remisión a orientación</td>
          <td class="disabled">{{$remision_orientacion_1p}}
            <a href="{{ route('remision_orientacion')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a> 
          </td>
          <td >{{$remision_orientacion_2p}}</td>
          <td class="disabled" class="disabled">{{$remision_orientacion_3p}}</td>
          <td class="disabled">{{$remision_orientacion_4p}}</td>
          <td>{{$remision_orientacion}}</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>Total Observaciones</th>
          <th class="disabled">{{$totalobservaciones_1p}}</th>
          <th >{{$totalobservaciones_2p}}</th>
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
  <table class="ui celled striped small very compact selectable table" id="table_id" class="display">
    <thead>
      <tr>
        <th class="">Id</th>
        <th class="three wide">Nombres</th>
        <th class="">Tipo</th>
        <th class="">Escenario</th>
        <th class="">Nota</th>
        <th class="">Fecha</th>
        <th class="four wide">Comentario</th>
        <th class="">Autor</th>
        <th class="">Curso</th>
        <th class="">Acciones</th>
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
        <th colspan="10">
            {{$observations->render()}}  
        </th>
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

    // $(document).ready( function () {
    //   $('#table_id').DataTable();
    // } );
  </script>
@endsection
