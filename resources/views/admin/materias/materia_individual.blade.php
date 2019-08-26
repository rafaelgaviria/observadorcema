@extends('layouts.app')
@section('content')

{{-- <h2 class="ui dividing header">Materia: {{$materias->name}} {{$materias->name_course}}</h2> --}}
<a href="{{ URL::previous() }}"><i class="angle left icon fz2em"></i> Regresar</a><br><br>
{!! Form::open(['route' => 'materias.store','method'=>'post'])!!}
<div class="ui grid">
  <div class="eight column row">  
    <div class="ui negative message">
      <div class="header">
        Por favor seleccionar primero la materia a calificar <br><br>
        <div class="field">
          {!! Form::label('Materia', "") !!}      
          {!! Form::select('materia_id', $materia, null, [
              'class'=>'ui selection dropdown',
              'placeholder'=>'Seleccione la Materia',
              ])
          !!}
        </div>  
      </div>
    </div>
    
    <div class="right floated column">
      {!! Form::submit('Enviar', [
        'class' => 'fluid blue ui button',
      ]) !!}
    </div>
  </div>
</div>


  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th rowspan="2" class="text-center">Foto</th>
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
      </tr>
    </thead>
    <tbody>
      <?php 
        $e=1;
        $cant = count($students);
      ?>
      @foreach($students as $student)
        <tr>
            <td>
              @php
                $foto = public_path().'/images/avatar/'.$student->document.'.jpg';
              @endphp
              @if(file_exists($foto))
                <img src="{{asset('images/avatar/'.$student->document.'.jpg')}}" class="avatar" style="width: 48px; height:45px">
              @else
                <img src="{{asset('images/avatar/user.png')}}" class="avatar" style="width: 48px; height:45px">
              @endif  
            </td>
            <td>
              <p>
                <input type="hidden" name="user_id[{{$e}}]" value="{{ $student->id }}">
                <a href="{{ route('observerstudent',$student->id)}}" >{{ $student->name }}</a></p>
            </td>
            @for ($i = 1; $i < 13; $i++)
              <td>
              {{-- Corte {{ $i }} --}}
                <div class="ui toggle checkbox mini form" id="cp">
                <input type="checkbox" name="cp_{{$i}}[{{$e}}][{{$i}}]" value="1">
                </div>
              </td>
            @endfor
        </tr>
        <?php $e++; ?>
      @endforeach
  </table>

  <div class="ui grid">
    <div class="nine column row">
      <div class="right floated column">
        {!! Form::submit('Enviar', [
          'class' => 'fluid blue ui button',
        ]) !!}
      </div>
    </div>
  </div>
 
  {{-- @php    
    dd($rating_id);
  @endphp --}}
  {!! Form::hidden('student_count',$cant)!!}
  {!! Form::hidden('course',$course)!!}
  {!! Form::hidden('creator_id',$creator)!!}
  {{-- {!! Form::hidden('materia_id',$materias->id)!!} --}}
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

    $('select.dropdown')
      .dropdown()
    ;

    $('.tiny.modal')
      .modal('show')
    ;
  </script>
@endsection