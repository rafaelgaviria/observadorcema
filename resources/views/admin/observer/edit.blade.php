@extends('layouts.app')
@section('content')
  <a href="{{ URL::previous() }}"><i class="angle left icon fz2em"></i> Regresar</a>
    <h1>Editar Observación de: {{ $observation->user->name }}</h1>
    <p><strong>ID Observación: </strong> {{ $observation->id }}</p>
    {!! Form::model($observation, ['route' => ['observer.update', $observation->id],
    'method' => 'PUT']) !!}



      <div class="ui stackable two column grid">
    {{--  COLUMNA UNO  --}}
    <div class="eight wide column">
      <div class="ui big form">
        {{--  ESCENARIO  --}}
        <div class="field">
          {!! Form::label('Escenario', "Escenario") !!}      
          {!! Form::select('observer_scene_id', $observerscenes, null, [
              'class'=>'ui fluid dropdown',
              'placeholder'=>'Selecciones Escenario',
            ])
          !!}
        </div>   
        
        {{--  CATEGORÍA  --}}
        <div class="field">
          {!! Form::label('Categoría', "Categoría") !!}      
          {!! Form::select('observer_category_id', $observercategories, null, [
            'class'=>'ui selection dropdown',
            'placeholder'=>'Selecciones Categoría',
            ])
          !!}
        </div>   
        
        {{--  TIPO DE NOTA  --}}
        <div class="field">
          {!! Form::label('Tipo de la anotación', "Nota") !!}
          {!! Form::select('observer_note_id', $observernotes, null, [
            'class'=>'ui selection dropdown',
            'placeholder'=>'Tipo de anotación',
            ])
          !!}
        </div>
  
      </div>
    </div>
    {{--  COLUMNA DOS  --}}
    <div class="eight wide column">
       <div class="ui big form">
          {{--  TIPO DE OBSETVACIÓN  --}}
          <div class="field">
            {!! Form::label('Código de la observación', "Código de la observación") !!}
            {!! Form::select('observer_code_id', $observercodes, null, [
              'class'=>'ui selection dropdown',
              'placeholder'=>'Seleccione la observación',
              ])
            !!}
          </div>   
          {{--  TEXTO DE LA OBSERVACIÓN  --}}
          <div class="field">
            {!! Form::label('Observación') !!}
            {!! Form::textarea('observation', null,  [
              'size' => '30x8',
              'class'=>'form-control',
              'placeholder'=>'Breve descripción de los hechos', 
              // 'name'=>'body',
              ])
            !!}
          </div>   
            
        </div>
        <br/>
        {{--  BOTÓN ENVIAR  --}}
        {{ Form::submit('Enviar', [
          'class' => 'huge blue ui button',
        ]) }}
    </div>
    
   {{-- {!! Form::hidden('new_id', $new_id) !!}  --}}
  </div>
      
{{--  DATOS OCULTOS DEL ESTUDIANTE  --}}
{{--  {{$new_id}} --}}
  {!! Form::hidden('user_id', $user_id->id) !!}
  {!! Form::hidden('course_id', $user_id->course) !!}
  {!! Form::hidden('user_role_id', $user_id->role_id) !!}
  
  
  {{--  {!! Form::hidden('state', 1) !!}  --}}



<hr>
{{--
<p>Estudiante: {{$user_id->id}}</p>
<p>Rol Estudiante: {{$user_id->role_id}}</p>
<p>Curso: {{$user_id->course}}</p>
<hr>
 <p>Estado: {{$user_id->course}}</p> 
 --}}

<br/><br/><br/>

@section('scripts')
  {{-- <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script> --}}
  <script>
    $('select.dropdown')
    .dropdown();
    //CKEDITOR.config.height = 400;
    // CKEDITOR.config.width = 'auto';
  
    // CKEDITOR.replace('body');
  </script>
@endsection   

    
    
    
      {!! Form::close() !!}
  
@endsection

