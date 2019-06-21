@extends('layouts.app')

@section('content')

<a href="{{ URL::previous() }}"><i class="angle left icon fz2em"></i> Regresar</a><br><br>
{{-- <h3 class="ui dividing header">Observador académico</h3> --}}
<h2>{{$student}}</h2> <h4>Curso: {{$namecourse}} - Materias calificadas {{$totalmaterias}}</h4>
  <table class="ui celled striped small very compact table">
      <thead>
          <tr>
            <th rowspan="2" class="text-center">Materia</th>
            <th colspan="3" class="text-center">1er. periodo</th>
            <th colspan="3" class="text-center">2do. periodo</th>
            <th colspan="3" class="text-center">3er. periodo</th>
            <th colspan="4" class="text-center">4to. periodo</th>
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
            <th class="text-center"><br>Eliminar</th>
          </tr>
        </thead>
    <tbody>
      @php 
        $negativo="X"  
      @endphp
      @foreach($ob_academics as $ob_academic)
        <tr>
            <td>
                <h3 data-tooltip="id = {{ $ob_academic->materia->id }}" data-position="top left">{{ $ob_academic->materia->name }}</h3>
                <p data-tooltip="id = {{ $ob_academic->profesor->id }}" data-position="top left" data-inverted="">{{ $ob_academic->profesor->name }}</p> 
                
                </h4>
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_01 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_02 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_03 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_04 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_05 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            <td style="text-align: center; vertical-align:middle">
              @if ($ob_academic->cp_06 === 1)
                <i class="x big icon red"></i>
              @else
                <i class="check big icon green"></i>
              @endif
            </td>
            
            
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            @if(Auth::user()->id == 16)   
            <td>
                {{-- <a href="{{ route('observer.edit', $observation->id)}}" class="ui tiny icon button" style="display:inline-block !important">
                  <i class="edit blue icon"></i>
                </a> --}}
                {!!Form::open(['route' => ['spmaterias.destroy', $ob_academic->id],
                'method' => 'DELETE']) !!}
                <button class="ui tiny icon button">
                  <i class="cancel red icon"></i>
                </button>
                
                {!! Form::close() !!}
              </td>
            @endif
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

    // $(document).ready( function () {
    //   $('#table_id').DataTable();
    // } );
  </script>
@endsection