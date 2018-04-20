<div class="form-group">
  <label>Estudiante</label>
  {!! Form::select('user_id', $users, null, [
    'class'=>'ui selection dropdown',
    'placeholder'=>'Seleccione al estudiante',
    ])
    !!}
</div>

<div class="form-group">
  {!! Form::label('Tipo de Observación', "Tipo de Observación") !!}
  {!! Form::select('observer_type_id', $observertypes, null, [
    'class'=>'ui selection dropdown',
    'placeholder'=>'Tipo observación',
    ])
  !!}
</div>
 
<div class="form-group">
  {!! Form::label('Escenario', "Escenario") !!}
  {!! Form::select('observer_scene_id', $observerscenes, null, [
    'class'=>'ui selection dropdown',
    'placeholder'=>'Selecciones Escenario',
    ])
    !!}
</div>
<div class="form-group">
  {!! Form::label('Categoría', "Categoría") !!}
  {!! Form::select('observer_category_id', $observercategories, null, [
    'class'=>'ui selection dropdown',
    'placeholder'=>'Selecciones Categoría',
    ])
    !!}
</div>
<div class="form-group">
  {!! Form::label('Tipo de la anotación', "Nota") !!}
  {!! Form::select('observer_note_id', $observernotes, null, [
    'class'=>'ui selection dropdown',
    'placeholder'=>'Tipo de anotación',
    ])
  !!}
</div>
<div class="form-group">
  {!! Form::label('Código de la observación', "Código de la observación") !!}
  {!! Form::select('observer_code_id', $observercodes, null, [
    'class'=>'ui selection dropdown',
    'placeholder'=>'Seleccione la observación',
    ])
  !!}
</div>

<div class="form-group">
  {!! Form::label('Observación') !!}
  {!! Form::text('observation', null, [
    'class'=>'form-control',
    'placeholder'=>'Breve descripción de los hechos', 
    ])
    !!}
</div>


<div class="form-group">
  <label>Curso</label>
  {!! Form::select('course', $course, null, [
    'class'=>'ui selection dropdown',
    'placeholder'=>'Seleccione curso',
    ])
    !!}
</div>


<div class="form-group">
  {!! Form::label('Curso', "Curso") !!}
  {!! Form::number('course_id', null, [
    'class'=>'form-control', 
    ])
  !!}
</div>
<div class="form-group">
  {!! Form::label('Rol', "Rol") !!}
  {!! Form::number('rol_id', null, [
    'class'=>'form-control', 
    ])
  !!}
</div>

<div class="form-group">
  {!! Form::hidden('creator_id', $creator) !!}
</div>
<div class="form-group">
  {!! Form::hidden('users', $users) !!}
</div>
<div class="form-group">
  {!! Form::hidden('course', $course) !!}
</div>




<div class="form-group">
  {!! Form::label('Stado', "Estado") !!}
  {!! Form::number('state', null, [
    'class'=>'form-control', 
    ])
  !!}
</div>

<!--Botón de envío -->
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}  
</div>

