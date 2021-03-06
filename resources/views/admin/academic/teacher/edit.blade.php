@extends('layouts.app')
@section('content')
<a href="{{ URL::previous() }}"><i class="angle left icon fz2em"></i> Regresar</a><br><br>
<h2 class="ui dividing header">Materia: {{$materias->name}} {{$materias->name_course}}</h2>
{{--
<div class="ui negative message">
  <i class="close icon"></i>
  <div class="header">
    Aviso para calificación de cuarto corte parcial
  </div>
  <p>Si esta materia no contiene listado de estudiantes haga clic en el siguiente enlace: <a href="{{ route('student_list', $materias)}}" class="ui tiny icon " style="display:inline-block !important"><h4>Listado de estudiantes {{$materias->name}} {{$materias->name_course}}</h4></a>
</p></div> --}}

{!! Form::open(['route' => 'onpmaterias.store','method'=>'post'])!!}
{!! Form::submit('Enviar', [
  'class' => 'huge blue ui button',
]) !!}
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        {{-- <th rowspan="2" class="text-center">Foto</th> --}}
        <th rowspan="2" class="text-center">Estudiante</th>
        <th colspan="3" class="text-center">1er. periodo</th>
        <th colspan="3" class="text-center">2do. periodo</th>
        <th colspan="3" class="text-center">3er. periodo</th>
        <th colspan="3" class="text-center">4to. periodo</th>
      </tr>
      <tr>
        <th class="text-center">1<br>Mar. 1</th>
        <th class="text-center">2<br>Mar. 22</th>
        <th class="text-center">3<br>Abr. 12</th>
        <th class="text-center">4<br>May. 10</th>
        <th class="text-center">5<br>May. 31</th>
        <th class="text-center">6<br>Jun. 14</th>
        <th class="text-center">7<br>Ago. 2</th>
        <th class="text-center">8<br>Ago. 23</th>
        <th class="text-center">9<br>Sep. 20</th>
        <th class="text-center">10<br>Oct. 18</th>
        <th class="text-center">11<br>Nov. 1</th>
        <th class="text-center">12<br>Nov. 15</th>
        @if(Auth::user()->id == 16)
          <th class="text-center">Eliminar</th>
        @endif
      </tr>
    </thead>
    <tbody>
      <?php 
        $e=1;
        $cant = count($academics);
      ?>
      <?php 
        // var_dump($cant)
      ?>
      @foreach($academics as $academic)
        <tr>
          {{-- @php
            <td>
                $foto = public_path().'/images/avatar/'.$student->document.'.jpg';
              @endphp
              @if(file_exists($foto))
                <img src="{{asset('images/avatar/'.$student->document.'.jpg')}}" class="avatar" style="width: 48px; height:45px">
              @else
                <img src="{{asset('images/avatar/user.png')}}" class="avatar" style="width: 48px; height:45px">
              </td>
              @endif   --}}
            <td>
              <p>
                
                <input type="hidden" name="user_id[{{$e}}]" value="{{ $academic->user_id }}">
                <a href="{{ route('observerstudent',$academic->user_id)}}" >
                  {{ $academic->user->name }}
                </a>
              </p>
            </td>
            @for ($i = 1; $i < 13; $i++)
              <?php
                if($i==1) $corte="cp_01";
                if($i==2) $corte="cp_02";
                if($i==3) $corte="cp_03";
                if($i==4) $corte="cp_04";
                if($i==5) $corte="cp_05";
                if($i==6) $corte="cp_06";
                if($i==7) $corte="cp_07";
                if($i==8) $corte="cp_08";
                if($i==9) $corte="cp_09";
                if($i==10) $corte="cp_10";
                if($i==11) $corte="cp_11";
                if($i==12) $corte="cp_12";
              ?>
              <td>
              {{-- Corte {{ $i }} --}}
                <div class="ui toggle checkbox mini form" id="cp">
                <input type="checkbox" name="cp_{{$i}}[{{$e}}][{{$i}}]" value="1"
                  @if($academic->$corte === 1) checked=checked @else  @endif>
                </div>
              </td>
            @endfor
            @if(Auth::user()->id == 16)   
            <td>
                {{-- <a href="{{ route('observer.edit', $observation->id)}}" class="ui tiny icon button" style="display:inline-block !important">
                  <i class="edit blue icon"></i>
                </a> --}}
                {!!Form::open(['route' => ['npmaterias.destroy', $academic->id],
                'method' => 'DELETE']) !!}
                <button class="ui tiny icon button">
                  <i class="cancel red icon"></i>
                </button>
                
                {!! Form::close() !!}
              </td>
            @endif
        </tr>
        <?php $e++; ?>
        @endforeach
  </table>
  {{-- @php    
    dd($rating_id);
  @endphp --}}
  {!! Form::hidden('student_count',$cant)!!}
  {!! Form::hidden('course',$course)!!}
  {!! Form::hidden('creator_id',$creator)!!}
  
  {!! Form::hidden('materia_id',$materias->id)!!}

  {!! Form::close() !!}
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