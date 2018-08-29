@extends('layouts.app')

@section('content')
<div class="ui container">
    {{--  <h2><strong>Detalle Observación:</strong> {{ $observation->user->name }}</h2>
    <h2><strong>Curso:</strong> {{ $observation->course->name }}</h2>  --}}
  {{-- RESUMEN ESTADISTICAS --}}
  {{-- <div class="ui statistics">
    <div class="blue statistic">
      <div class="value">
        {{$totalobservaciones}}
      </div>
      <div class="label">Observaciones</div>
    </div>
  </div> --}}
 

<h2 class="ui dividing header">Estudiantes suspendidos</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Foto</th>
        <th>Nombres</th>
        <th>Curso</th>
        <th>Escenario</th>
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
        <td><img src="{{asset('images/avatar/'.$observation->user->document.'.jpg')}}" class="avatar"></td>
        <td>{{ $observation->user->name }}</td>
        <td>{{ $observation->course->name }}</td>
        <td>{{ $observation->observerscene->name }}</td>
        <td>{{ $observation->created_at }}</td>
        <td>{{ $observation->observation }}</td>
        <td>{{ $observation->creator->name }}</td>
        

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
  {{-- 
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
  --}}
  
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
