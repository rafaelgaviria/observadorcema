@extends('layouts.app')

@section('content')
<div class="ui container">
  <div class="ui info message">
    <p>Plataforma para la gestión del observador del colegio Estrada María Auxiliadora. Versión 0.1</p>
  </div>
  <div class="form-group">
      
          'class'=>'form-control',
          'required'=>'required', 
          'placeholder'=>'Nombre...'
        ])
      !!}
    </div>
    {{-- 
    <div class="form-group">
      {!!Form::label('Precio')!!}
      {!!Form::number('precio', null, [
          'class'=>'form-control',
          'required'=>'required', 
          'placeholder'=>'Precio...'
        ])
      !!}
    </div>
    <div class="form-group">
      {!!Form::label('Descripcion')!!}
      {!!Form::textarea('descripcion', null, [
          'class'=>'form-control',
          'placeholder'=>'Descripcion...'
        ])
      !!}
    </div>
    <div class="form-group">
      {!!Form::label('Cantidad')!!}
      {!!Form::number('cantidad', null, [
          'class'=>'form-control',
          'required'=>'required', 
          'placeholder'=>'Cantidad...'
        ])
      !!}
    </div>
    <div class="form-group">
        <label>Estados</label>
        {!! Form::select('idestado', $estados, null, ['class' => 'form-control',
          'placeholder'=>'Seleccione el estado',
          'required'=>'required'
        ]) !!}
    </div>
    
    <div class="form-group">
      {!!Form::label('Puntos')!!}
      {!!Form::number('puntos', null, [
          'class'=>'form-control',
          'required'=>'required', 
          'placeholder'=>'Puntos...'
        ])
      !!}
    </div>
    <div class="form-group">
      {!!Form::label('Imagen Principal (800 * 600 px)')!!}
      <input type="file" name="imagen">
    </div>
  --}}
</div>
@endsection