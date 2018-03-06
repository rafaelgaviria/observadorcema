@extends('layouts.app')

@section('content')
<div class="ui container">
  <div class="ui info message">
    <p>Plataforma para la gestión del observador del colegio Estrada María Auxiliadora. Versión 0.1</p>
  </div>

  <a href="{{ route('observer.create')}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
  
  
  <table class="ui celled table">
    <thead>
      <tr>
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
        <td>Imagen</td>
        <td>{{ $observation->user->name }}</td>
        <td>{{ $observation->observer_scene_id }}</td>
        <td>{{ $observation->observer_note_id }}</td>
        <td>{{ $observation->created_at }}</td>
        <td>{{ $observation->observation }}</td>
        <td>{{ $observation->user->name }}</td>
        <td>{{ $observation->course_id }}</td>

        <td>
          <a href="{{ route('observer.show', $observation->id)}}" class="ui primary button">Ver</a>
          <a href="{{ route('observer.edit', $observation->id)}}" class="ui primary button">Editar</a>
          <a href="#" class="ui red button">Eliminar</a>
        </td>
      </tr>
      @endforeach 
  
    </tbody>
    <tfoot>
      <tr>
        <th colspan="9">
            {{$observations->render()}}  
        </th>
    </tr>
  </tfoot>
  </table>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  {{--
  <div class="ui three column doubling stackable grid container">
    <div class="column">
        <h3>Lista de Niveles</h3>
        @foreach($levels as $level)
        <div class="">
          <div class="">
            {{ $level->level}}
          </div>
        </div>
      
        @endforeach
    </div>
    <div class="column">
        <h3>Lista de Cursos</h3>

        @foreach($courses as $course)
        <div class="">
          <div class="">
            <a href="#">{{ $course->name }}</a>
          </div>
        </div>
        
        @endforeach
    </div>
    <div class="column">
        <h3>Lista de Materias</h3>

        @foreach($subjects as $subject)
        <div class="">
          <div class="">
            {{ $subject->name}}
          </div>
        </div>
      
        @endforeach
        <!-- Para paginar -->
        {{$subjects->render()}}
    </div>
  </div>
  --}}
</div>
@endsection