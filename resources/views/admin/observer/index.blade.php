@extends('layouts.app')

@section('content')
<div class="ui container">
  
  {{--  <a href="{{ route('observer.create')}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>  --}}
  <br>
  <br>
  <br>
  {{--  PRIMERO  --}}
  <div class="ui styled fluid accordion">
    <div class="title"><i class="dropdown icon"></i>Primero</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($primeroestudiantes as $primeroestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $primeroestudiante->name }}</td>
          <td>
              
              <a href="{{ route('observer.create', ['id' => $primeroestudiante->id])}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
               

          </td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  SEGUNDO  --}}
    <div class="title"><i class="dropdown icon"></i>Segundo</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($segundoestudiantes as $segundoestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $segundoestudiante->name }}</td>
          <td>
              <a href="{{ route('observer.create', ['id' => $segundoestudiante->id])}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
              
  
          </td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  TERCERO  --}}
    <div class="title"><i class="dropdown icon"></i>Tercero</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($terceroestudiantes as $terceroestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $terceroestudiante->name }}</td>
          <td>
              <a href="{{ route('observer.create', $terceroestudiante->id)}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
              

          </td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  CUARTO  --}}
    <div class="title"><i class="dropdown icon"></i>Cuarto</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($cuartoestudiantes as $cuartoestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $cuartoestudiante->name }}</td>
          <td>
              <a href="{{ route('observer.create', $cuartoestudiante->id)}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
              

          </td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  QUINTO  --}}
    <div class="title"><i class="dropdown icon"></i>Quinto</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($quintoestudiantes as $quintoestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $quintoestudiante->name }}</td>
          <td>
              <a href="{{ route('observer.create', $quintoestudiante->id)}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
              
            {{--  <a href="{{ route('observer.edit', $user->id)}}" class="mini ui primary button">Editar</a>  --}}
          </td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  SEXTO  --}}
    <div class="title"><i class="dropdown icon"></i>Sexto</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($sextoestudiantes as $sextoestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $sextoestudiante->name }}</td>
          <td>
              <a href="{{ route('observer.create', $sextoestudiante->id)}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  SEPTIMO  --}}
    <div class="title"><i class="dropdown icon"></i>Séptmo</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($septimoestudiantes as $septimoestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $septimoestudiante->name }}</td>
          <td>
              <a href="{{ route('observer.create', $septimoestudiante->id)}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
              

          </td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  OCTAVO  --}}
    <div class="title"><i class="dropdown icon"></i>Octavo</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($octavoestudiantes as $octavoestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $octavoestudiante->name }}</td>
          <td>
              <a href="{{ route('observer.create', $octavoestudiante->id)}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
              

          </td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  NOVENO  --}}
    <div class="title"><i class="dropdown icon"></i>Noveno</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($novenoestudiantes as $novenoestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $novenoestudiante->name }}</td>
          <td>
              <a href="{{ route('observer.create', $novenoestudiante->id)}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
              

          </td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  DECIMO  --}}
    <div class="title"><i class="dropdown icon"></i>Décimo</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($decimoestudiantes as $decimoestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $decimoestudiante->name }}</td>
          <td>
              <a href="{{ route('observer.create', $decimoestudiante->id)}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
              

          </td>
        </tr>
        @endforeach
      </table>
    </div>
    {{--  ONCE  --}}
    <div class="title"><i class="dropdown icon"></i>Once</div>
    <div class="content">
      <table class="ui celled striped small compact table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Acciones</th>
          </tr>
        </thead>
        @foreach($onceestudiantes as $onceestudiante)
        <tr>
          <td>Foto</td>
          <td>{{ $onceestudiante->name }}</td>
          <td>
              <a href="{{ route('observer.create', $onceestudiante->id)}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
              

          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div> {{-- CIERRE CONTENEDOR ACORDEON    --}}

<br>
<br>
<br>
<br>

  <div class="ui statistics">
    <div class="violet statistic">
      <div class="value">
        {{$totalobservaciones}}
      </div>
      <div class="label">Observaciones</div>
    </div>
   
  
  
    <div class="violet statistic">
      <div class="value">
        {{$category1}}
      </div>
      <div class="label">Asistencia</div>
    </div>
  
  
    <div class="violet statistic">
      <div class="value">
        {{$category2}}
      </div>
      <div class="label">Puntualidad</div>
    </div>
  
  
    <div class="violet statistic">
      <div class="value">
        {{$category3}}
      </div>
      <div class="label">Presentación Personal</div>
    </div>
  </div>
  
 
  



  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th colspan="10">
            {{$observations->render()}}  
        </th>
      </tr>
      <tr>
        <th>Id</th>
        <th>Foto</th>
        <th>Nombres</th>
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
        <td>Imagen</td>
        <td>{{ $observation->user->name }}</td>
        <td>{{ $observation->observerscene->name }}</td>
        <td>{{ $observation->observernote->name }}</td>
        <td>{{ $observation->created_at }}</td>
        <td>{{ $observation->observation }}</td>
        <td>{{ $observation->creator->name }}</td>
        <td>{{ $observation->course->name }}</td>

        <td>
          <a href="{{ route('observer.show', $observation->id)}}" class="mini ui primary button">Ver</a>
          <a href="{{ route('observer.edit', $observation->id)}}" class="mini ui primary button">Editar</a>
          
          {!!Form::open(['route' => ['observer.destroy', $observation->id],
          'method' => 'DELETE']) !!}
          <button class="mini ui red button">Eliminar</button>
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
  
  <table>
    @foreach($userobservations as $userobserver)
    <tr>
      <td>{{ $userobserver->id }}</td>
      <td>{{ $userobserver->user_id }}</td>
      <td>{{ $userobserver->name }}</td>
      <td>{{ $userobserver->observer_category_id }}</td>
    </tr>
    @endforeach
  </table>
  
  <br>
  <br>
  <br>
  <br>

</div>
@endsection

@section('scripts')
  <script>
    $('.ui.accordion')
      .accordion()
    ;
  </script>
@endsection
