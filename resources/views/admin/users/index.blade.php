@extends('layouts.app')
@section('content')

<h2 class="ui dividing header">Listado usuarios</h2>
<table class="ui celled striped small very compact selectable table" id="table_id" class="display">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Curso</th>
        <th>Correo</th>
        <th>Documento</th>
        <th>Perfil</th>
        <th>Estado</th>
        {{-- <th>Detalle</th>
        <th>Editar</th> --}}
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach($observations as $observation) --}}
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->course}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->document}}</td>
            <td>{{$user->role_id}}</td>
            <td>{{$user->state}}</td>

            {{-- <td><i class="eye blue icon"></i></td>
            <td><i class="edit blue icon"></i></td> --}}
            <td>
                @if(Auth::user()->id == 16)   
                {{-- <a href="{{ route('observer.edit', $observation->id)}}" class="ui tiny icon button" style="display:inline-block !important">
                  <i class="edit blue icon"></i>
                </a> --}}
                {!!Form::open(['route' => ['usuarios.destroy', $user->id],
                'method' => 'DELETE']) !!}
                <button class="ui tiny icon button">
                  <i class="cancel red icon"></i>
                </button>
                
                {!! Form::close() !!}
              @endif
            </td>
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
