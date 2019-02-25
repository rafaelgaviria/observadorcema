@extends('layouts.app')
@section('content')

<h2 class="ui dividing header">Listado cursos</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Curso</th>
      </tr>
    </thead>
    <tbody>
      @foreach($courses as $course)
        <tr>
            <td>
                <a href="{{ route('materia_list', $course->id)}}" class="ui tiny icon" style="display: inline-block !important">
                    <h3>{{$course->name}} <!--<i class="angle double right icon blue fz2em"></i>--></h3>                    
                </a>
            </td>

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
