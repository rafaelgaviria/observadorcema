<div class="ui grid">
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
        
      {{--  BOTÓN ENVIAR  --}}
      {{ Form::submit('Enviar', [
        'class' => 'huge blue ui button',
      ]) }}  

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
            ])
          !!}
        </div>   
          
      </div>
  </div>
</div>

<hr>
<p>Rol Creador: {{$creator_role}}</p>
<p>ID Creador: {{$creator}}</p>
{{--<p>Estudiante: {{$user_id->id}}</p>
<p>Curso: {{$user_id->course}}</p>
<p>User Role: {{$user_id->role_id}}</p>--}}
{{--<p>Rol: {{$user_id->rol}}</p>
<p>Estado: {{$course}}</p>--}}

{{--  DATOS OCULTOS DEL ESTUDIANTE  --}}

  {!! Form::hidden('user_id', $user_id->id) !!}
  {!! Form::hidden('course_id', $user_id->course) !!}
  {!! Form::hidden('user_rol_id', $user_id->role_id) !!}
  {!! Form::hidden('creator_id', $creator) !!}
  {!! Form::hidden('creator_role', $creator_role) !!}
  
  {{--  {!! Form::hidden('state', 1) !!}  --}}

@section('scripts')
  <script>
    $('select.dropdown')
    .dropdown();
  </script>
@endsection

