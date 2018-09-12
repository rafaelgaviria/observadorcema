@extends('layouts.app')

@section('content')

  {{-- RESUMEN ESTADISTICAS --}}
  <div class="ui grid">
    <div class="wide column">
      <h1 class="ui header">Resumen observador Colegio CEMA</h1>
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
            <td class="disabled">{{$comentarios_1p}}</td>
            <td class="disabled">{{$comentarios_2p}}</td>
            <td>{{$comentarios_3p}}</td>
            <td></td>
            <td>{{$comentarios}}</td>
          </tr>
          <tr>
            <td>Notificaciones</td>
            <td class="disabled">{{$notificaciones_1p}}</td>
            <td class="disabled">{{$notificaciones_2p}}</td>
            <td>{{$notificaciones_3p}}
              <a href="{{ route('notificaciones')}}" class="ui tiny icon" style="display: inline-block !important">
              <i class="angle double right icon blue fz2em"></i></a>
            </td>
            <td></td>
            <td>{{$notificaciones}}</td>
          </tr>
          <tr>
            <td>Compromisos</td>
            <td class="disabled">{{$compromisos_1p}}</td>
            <td class="disabled">{{$compromisos_2p}}</td>
            <td>{{$compromisos_3p}}
              <a href="{{ route('compromisos')}}" class="ui tiny icon" style="display: inline-block !important">
              <i class="angle double right icon blue fz2em"></i></a>
            </td>
            <td></td>
            <td>{{$compromisos}}</td>
          </tr>
          <tr>
            <td>Sanciones</td>
            <td class="disabled">{{$sancion_1p}}</td>
            <td class="disabled">{{$sancion_2p}}</td>
            <td>{{$sancion_3p}} <a href="{{ route('sanciones')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>
          </td>
            <td></td>
            <td>{{$sancion}}</td>
          </tr>
          <tr>
            <td>Matricula condicional</td>
            <td class="disabled">{{$matricula_condicional_1p}}</td>
            <td class="disabled">{{$matricula_condicional_2p}}</td>
            <td>{{$matricula_condicional_3p}}
            <a href="{{ route('matricula_condicional')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>
            </td>
            <td></td>
            <td>{{$matricula_condicional}}</td>
          </tr>
          <tr>
            <td>Remisión a comité de convivencia</td>
            <td class="disabled">{{$remision_comite_convivencia_1p}}</td>
            <td class="disabled">{{$remision_comite_convivencia_2p}}</td>
            <td>{{$remision_comite_convivencia_3p}}</td>
            <td></td>
            <td>{{$remision_comite_convivencia}}</td>
          </tr>
          <tr>
            <td>Remisión al consejo académico</td>
            <td class="disabled">{{$remision_consejo_academico_1p}}</td>
            <td class="disabled">{{$remision_consejo_academico_2p}}</td>
            <td>{{$remision_consejo_academico_3p}}</td>
            <td></td>
            <td>{{$remision_consejo_academico}}</td>
          </tr>
          <tr>
            <td>Cancelación de matrícula</td>
            <td class="disabled">{{$cancelacion_matricula_1p}}</td>
            <td class="disabled">{{$cancelacion_matricula_2p}}</td>
            <td>{{$cancelacion_matricula_3p}}
            <a href="{{ route('cancelacion_matricula')}}" class="ui tiny icon" style="display: inline-block !important">
            <i class="angle double right icon blue fz2em"></i></a>
             </td>
            <td></td>
            <td>{{$cancelacion_matricula}}</td>
          </tr>
          <tr>
            <td>Remisión a orientación</td>
            <td class="disabled">{{$remision_orientacion_1p}}</td>
            <td class="disabled">{{$remision_orientacion_2p}}</td>
            <td>{{$remision_orientacion_3p}}</td>
            <td></td>
            <td>{{$remision_orientacion}}</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Total Observaciones</th>
            <th class="disabled">{{$totalobservaciones_1p}}</th>
            <th class="disabled">{{$totalobservaciones_2p}}</th>
            <th>{{$totalobservaciones_3p}}</th>
            <th></th>
            <th>{{$totalobservaciones}}</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  
  <h2 class="ui header">Cursos</h2>
  <div class="ui message info">
    <div class="header"></div>
    <p><strong>Selección de estudiante:</strong>  Al desplegar cada una de las pestañas de curso encontrará el listado de estudiantes.</p>
      
  </div>
  
  <!-- <?php var_dump($primeroestudiantes); ?> -->
  
  {{--  PRIMERO  --}}
  <div class="ui styled fluid accordion segment">
    <div class="title ui orange segment"><i class="dropdown icon"></i>Primero <span>{{$primerototal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th><h4>Foto</h4></th>
            <th><h4>Nombres</h4></th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
          </tr>
        </thead>
        @foreach($primeroestudiantes as $primeroestudiante)
        <tr>
          <td>
            <img src="{{asset('images/avatar/'.$primeroestudiante->document.'.jpg')}}" class="avatar">
          </td>
          <td>                                                                                                                             
            <a href="{{ route('observerstudent',$primeroestudiante->id)}}" class="" >
              {{ $primeroestudiante->name }}</a>            
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer',$primeroestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a>
          </td>
          
        </tr>
        @endforeach
      </table>
    </div>
    {{--  SEGUNDO  --}}
    <div class="title ui orange segment"><i class="dropdown icon"></i>Segundo <span>{{$segundototal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
            
          </tr>
        </thead>
        @foreach($segundoestudiantes as $segundoestudiante)
        <tr>
          <td><img src="{{asset('images/avatar/'.$segundoestudiante->document.'.jpg')}}" class="avatar"></td>
          <td><a href="{{ route('observerstudent',$segundoestudiante->id)}}" class="" >{{ $segundoestudiante->name }}</a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer',$segundoestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
                        
        </tr>
        @endforeach
      </table>
    </div>
    {{--  TERCERO  --}}
    <div class="title ui orange segment"><i class="dropdown icon"></i>Tercero <span>{{$tercerototal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
            
          </tr>
        </thead>
        @foreach($terceroestudiantes as $terceroestudiante)
        <tr>
          <td><img src="{{asset('images/avatar/'.$terceroestudiante->document.'.jpg')}}" class="avatar"></td>
          <td><a href="{{ route('observerstudent',$terceroestudiante->id)}}" class="" >{{ $terceroestudiante->name }}</a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer', $terceroestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  CUARTO  --}}
    <div class="title ui orange segment"><i class="dropdown icon"></i>Cuarto <span>{{$cuartototal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
            
          </tr>
        </thead>
        @foreach($cuartoestudiantes as $cuartoestudiante)
        <tr>
          <td><img src="{{asset('images/avatar/'.$cuartoestudiante->document.'.jpg')}}" class="avatar"></td>
          <td><a href="{{ route('observerstudent',$cuartoestudiante->id)}}" class="" >{{ $cuartoestudiante->name }}</a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer', $cuartoestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  QUINTO  --}}
    <div class="title ui orange segment"><i class="dropdown icon"></i>Quinto <span>{{$quintototal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
            
          </tr>
        </thead>
        @foreach($quintoestudiantes as $quintoestudiante)
        <tr>
          <td><img src="{{asset('images/avatar/'.$quintoestudiante->document.'.jpg')}}" class="avatar"></td>
          <td><a href="{{ route('observerstudent',$quintoestudiante->id)}}" class="" >{{ $quintoestudiante->name }}</a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer', $quintoestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  SEXTO  --}}
    <div class="title ui teal segment"><i class="dropdown icon"></i>Sexto <span>{{$sextototal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
            
          </tr>
        </thead>
        @foreach($sextoestudiantes as $sextoestudiante)
        <tr>
          <td><img src="{{asset('images/avatar/'.$sextoestudiante->document.'.jpg')}}" class="avatar"></td>
          <td><a href="{{ route('observerstudent',$sextoestudiante->id)}}" class="" >{{ $sextoestudiante->name }}</a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer', $sextoestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  SEPTIMO  --}}
    <div class="title ui teal segment"><i class="dropdown icon"></i>Séptimo <span>{{$septimototal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
            
          </tr>
        </thead>
        @foreach($septimoestudiantes as $septimoestudiante)
        <tr>
          <td><img src="{{asset('images/avatar/'.$septimoestudiante->document.'.jpg')}}" class="avatar"></td>
          <td><a href="{{ route('observerstudent',$septimoestudiante->id)}}" class="" >{{ $septimoestudiante->name }}</a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer', $septimoestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  OCTAVO  --}}
    <div class="title ui teal segment"><i class="dropdown icon"></i>Octavo <span>{{$octavototal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
            
          </tr>
        </thead>
        @foreach($octavoestudiantes as $octavoestudiante)
        <tr>
          <td><img src="{{asset('images/avatar/'.$octavoestudiante->document.'.jpg')}}" class="avatar"></td>
          <td><a href="{{ route('observerstudent',$octavoestudiante->id)}}" class="" >{{ $octavoestudiante->name }}</a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer', $octavoestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  NOVENO  --}}
    <div class="title ui teal segment"><i class="dropdown icon"></i>Noveno <span>{{$novenototal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
            
          </tr>
        </thead>
        @foreach($novenoestudiantes as $novenoestudiante)
        <tr>
          <td><img src="{{asset('images/avatar/'.$novenoestudiante->document.'.jpg')}}" class="avatar"></td>
          <td><a href="{{ route('observerstudent',$novenoestudiante->id)}}" class="" >{{ $novenoestudiante->name }} </a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer', $novenoestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  DECIMO  --}}
    <div class="title ui violet segment"><i class="dropdown icon"></i>Décimo <span>{{$decimototal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
            
          </tr>
        </thead>
        @foreach($decimoestudiantes as $decimoestudiante)
        <tr>
          <td><img src="{{asset('images/avatar/'.$decimoestudiante->document.'.jpg')}}" class="avatar"></td>
          <td><a href="{{ route('observerstudent',$decimoestudiante->id)}}" class="" > {{ $decimoestudiante->name }}</a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer', $decimoestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  ONCE  --}}
    <div class="title ui violet segment"><i class="dropdown icon"></i>Once <span>{{$oncetotal}}</span></div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th><h4>A</h4></th>
            <th><h4>P</h4></th>
            <th><h4>PP</h4></th>
            <th><h4>CT</h4></th>
            <th><h4>CIR</h4></th>
            <th><h4>T3</h4></th>
            <th><h4>T2</h4></th>
            <th><h4>T1</h4></th>
            <th><h4>Crear</h4></th>
            
          </tr>
        </thead>
        @foreach($onceestudiantes as $onceestudiante)
        <tr>
          <td><img src="{{asset('images/avatar/'.$onceestudiante->document.'.jpg')}}" class="avatar"></td>
          <td><a href="{{ route('observerstudent',$onceestudiante->id)}}" class="" >{{ $onceestudiante->name }}</a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ route('observer', $onceestudiante->id)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div> {{-- CIERRE CONTENEDOR ACORDEON    --}}

<h2 class="ui dividing header">Últimas observaciones</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
        {{--<th>Foto</th>--}}
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
        {{--<td><img src="{{asset('images/avatar/'.$user->document.'.jpg')}}" class="avatar"></td>--}}
        <td>{{ $observation->user->name }}</td>
        <td>{{ $observation->observertype->name }}</td>
        <td>{{ $observation->observerscene->name }}</td>
        <td>{{ $observation->observernote->name }}</td>
        <td>{{ $observation->created_at }}</td>
        <td>{{ $observation->observation }}</td>
        <td>{{ $observation->creator->name }}</td>

        <td>{{ $observation->course->name }}</td>

        <td>
          <a href="{{ route('observer.show', $observation->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
          {{-- 
          <a href="{{ route('observer.edit', $observation->id)}}" class="ui tiny icon button" style="display:inline-block !important">
            <i class="edit blue icon"></i>
          </a>
              
          {!!Form::open(['route' => ['observer.destroy', $observation->id],
          'method' => 'DELETE']) !!}
          <button class="ui tiny icon button">
            <i class="cancel red icon"></i>
          </button>
          --}}
          {!! Form::close() !!}
          
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
  <br>

@endsection

@section('scripts')
  <script>
    $('.ui.accordion')
      .accordion()
    ;
  </script>
@endsection
