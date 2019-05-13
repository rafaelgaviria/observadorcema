@extends('layouts.app')
@section('content')
<a href="{{ URL::previous() }}"><i class="angle left icon fz2em"></i> Regresar</a>
<h2 class="ui dividing header">Materias de {{$course->name}}</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Área</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($materias as $materia)
        <tr>
            <td>
              {{-- <a href="{{ route('student_list', $materia->id)}}" class="ui tiny icon" style="display: inline-block !important"> --}}
              <div class="ui button" data-tooltip="{{ $materia->id }}" data-position="top left">
                {{$materia->name}}
              </div>
              {{-- </a> --}}
            </td>
            <td>{{$materia->area}}</td>
            <td><a href="{{ route('materias.edit', $materia->id)}}" class="ui tiny icon button" style="display:inline-block !important">
              <i class="edit blue icon"></i>
            </a></td>
        </tr>
        @endforeach
  </table>

  <br>
  <br>
  <br>

@endsection

@section('scripts')
  <script>

  </script>
@endsection
