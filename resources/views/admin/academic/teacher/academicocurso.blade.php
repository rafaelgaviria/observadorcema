@extends('layouts.app')
@section('content')

<h2 class="ui dividing header">Primer corte parcial - Curso: {{$namecourse}} </h2>
    @php
    // $e=1;
       $cant = count($materias);
    @endphp

  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th rowspan="2" class="text-center">Foto</th>
        <th rowspan="2" class="text-center">Estudiante</th>
      <th colspan="{{ $cant }}" class="text-center">Materias</th>
      </tr>
      <tr>
        @foreach($materias as $materia)
            <th class="text-center">{{$materia->name}}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      
      @foreach($estudiantes as $estudiante)
        <tr>
            <td>
              @php
                $foto = public_path().'/images/avatar/'.$estudiante->document.'.jpg';
              @endphp
              @if(file_exists($foto))
                <img src="{{asset('images/avatar/'.$estudiante->document.'.jpg')}}" class="avatar" style="width: 48px; height:45px">
              @else
                <img src="{{asset('images/avatar/user.png')}}" class="avatar" style="width: 48px; height:45px">
              @endif  
            </td>
            <td>
              <p data-tooltip="id = {{ $estudiante->id }}" data-position="top left">
                {{-- <input type="hidden" name="user_id[{{$e}}]" value="{{ $estudiante->id }}"> --}}
                {{$estudiante->name}}</p>
            </td>
            {{-- @for ($i = 1; $i < 13; $i++) --}}

            {{-- <td>@if ($cp_01[$k] === 0) <span style="color:darkgrey">{{ $nada }}</span> @else <h3 style="color:#f2711c; text-align:center"> {{$asistencia[$k]}} </h3> @endif</td>
            </td> --}}
            {{-- <td>
                Corte {{ $i }} 
                <div class="ui toggle checkbox mini form" id="cp">
                    <input type="checkbox" name="cp_{{$i}}[{{$e}}][{{$i}}]" value="1">
                </div>
            </td> --}}
            {{-- @endfor --}}
        </tr>
        {{-- @php
            $e++;   
        @endphp  --}}
        @endforeach
  </table>
  {{-- @php    
    dd($rating_id);
  @endphp --}}
  
  <br>
  <br>
  <br>

  
  
@endsection


@section('scripts')
<script>
  $('.ui.checkbox')
    .checkbox()
  ;
</script>

@endsection




  
