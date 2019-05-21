@extends('layouts.app')
@section('content')

<h2 class="ui dividing header">Calificación académica individual</h2>
<table class="ui celled striped small very compact selectable table" id="table_id" class="display">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Curso</th>
        <th>Calificar</th>
        {{-- <th>Perfil</th>
        <th>Estado</th> --}}
        {{-- <th>Detalle</th>
        <th>Editar</th> --}}
      </tr>
    </thead>
    <tbody>
      {{-- @foreach($observations as $observation) --}}
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>
                <h4>{{$user->name}}</h4>
            </td>
            <td>{{$user->course}}</td>
            <td>
                <a href="{{ route('materia_individual',$user->id)}}" class="ui mini green button" target="_blank">Calificar materia</a>
            </td>
            {{-- <td>{{$user->role_id}}</td>
            <td>{{$user->state}}</td> --}}

            {{-- <td><i class="eye blue icon"></i></td>
            <td><i class="edit blue icon"></i></td> --}}
        </tr>
        @endforeach

        {{-- <td>
          <a href="{{ route('observer.show', $observation->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
           
          <a href="{{ route('observer.edit', $observation->id)}}" class="ui tiny icon button" style="display:inline-block !important">
            <i class="edit blue icon"></i>
          </a>
      
          {!!Form::open(['route' => ['observer.destroy', $observation->id],
          'method' => 'DELETE']) !!}
          <button class="ui tiny icon button">
            <i class="cancel red icon"></i>
          </button>
          
          {!! Form::close() !!}
          
        </td> --}}
      </tr>
      
  
    </tbody>
    <tfoot>
      <tr>
        <th colspan="10">
            {{$users->render()}}  
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
    $(document).ready( function () {
      $('#table_id').DataTable();
    } );
  </script>
@endsection
