@extends('layouts.app')
@section('content')

<h2 class="ui dividing header">Materias de {{$course->name}}</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Curso</th>
        <th>Área</th>
      </tr>
    </thead>
    <tbody>
      @foreach($materias as $materia)
        <tr>
            <td>
                <a href="{{ route('student_list', $materia->id)}}" class="ui tiny icon" style="display: inline-block !important">
                    <h3>{{$materia->name}}</h3>                    
                </a>
            </td>
            <td>{{$materia->name_course}}</td>
            <td>{{$materia->area}}</td>
        </tr>
        @endforeach
  </table>

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
