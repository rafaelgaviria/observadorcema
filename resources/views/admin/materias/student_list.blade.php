@extends('layouts.app')
@section('content')

<h2 class="ui dividing header">Materia: {{$materias->name}}</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Foto</th>
        <th>Nombres y Apellidos</th>
        <th>Calificación</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
        <tr>
            <td><img src="{{asset('images/avatar/'.$student->document.'.jpg')}}" class="avatar" style="width: 48px; height:45px"></td>
            <td>
                <h4>{{ $student->name }}</h4>
            </td>
            <td></td>
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
