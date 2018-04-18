@extends('layouts.app')

@section('content')
<div class="ui container">
  
  <a href="{{ route('observer.create')}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
  
  {{--  <div>
    <ul>
        @foreach($users as $user)
          <li>
            Usuario: {{ $user->name }} <br>

            <br>
            
          </li>
        @endforeach
        @foreach($users->roles as $role)
          <li>
              Rol: {{ $role->pivot->name }}
          </li>
        @endforeach
        
      </ul>
  </div>  --}}

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

{{-- <table>
  @foreach($obsdecursos as $obsdecurso)
  <tr>
    
    <td>{{ $obsdecurso->course_id }}</td>
    <td>{{ $obsdecurso->obs_count }}</td>
  </tr>
  @endforeach
</table> --}}




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
      @foreach($estudiantes as $estudiante)
      <tr>
        <td>{{ $estudiante->id }}</td>
        <td>Imagen</td>
         <td>{{ $estudiante->name }}</td>
        {{--<td>{{ $observation->observerscene->name }}</td>
        <td>{{ $observation->observernote->name }}</td>
        <td>{{ $observation->created_at }}</td>
        <td>{{ $observation->observation }}</td>
        <td>{{ $observation->creator->name }}</td>
        <td>{{ $observation->course->name }}</td> --}}

        <td>
          {{-- <a href="{{ route('observer.show', $observation->id)}}" class="mini ui primary button">Ver</a>
          <a href="{{ route('observer.edit', $observation->id)}}" class="mini ui primary button">Editar</a> --}}
          
          {{-- {!!Form::open(['route' => ['observer.destroy', $observation->id],
          'method' => 'DELETE']) !!}
          <button class="mini ui red button">Eliminar</button>
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