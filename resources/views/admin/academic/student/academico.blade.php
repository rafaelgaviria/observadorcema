@extends('layouts.app')
@section('content')

{{-- <h2 class="ui dividing header">Materias de {{$course->name}}</h2> --}}
  <table class="ui celled striped small very compact table">
      <thead>
          <tr>
            <th rowspan="2" class="text-center">Materia</th>
            <th colspan="3" class="text-center">1er. periodo</th>
            <th colspan="3" class="text-center">2do. periodo</th>
            <th colspan="3" class="text-center">3er. periodo</th>
            <th colspan="3" class="text-center">4to. periodo</th>
          </tr>
          <tr>
            <th class="text-center">1<br>Mar. 1</th>
            <th class="text-center">2<br>Mar. 22</th>
            <th class="text-center">3<br>Abr. 12</th>
            <th class="text-center">1<br>May. 10</th>
            <th class="text-center">2<br>May. 31</th>
            <th class="text-center">3<br>Jun. 14</th>
            <th class="text-center">1<br>Ago. 2</th>
            <th class="text-center">2<br>Ago. 23</th>
            <th class="text-center">3<br>Sep. 20</th>
            <th class="text-center">1<br>Oct. 18</th>
            <th class="text-center">2<br>Nov. 1</th>
            <th class="text-center">3<br>Nov. 15</th>
          </tr>
        </thead>
    <tbody>
      {{-- {{$student->id}} --}}
      @foreach($materias as $materia)
        <tr>
            <td>
                {{ $materia->name }}<br>
                {{ $materia->code }}
                {{ $materia->course_id }}
                    
                
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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
