@extends('layouts.app')

@section('content')
  <div class="ui container">
    <h2><strong>Detalle Observación:</strong> {{ $observation->user->name }}</h2>
    <h2><strong>Curso:</strong> {{ $observation->course->name }}</h2>
    <hr>
    
      <div class="ui grid">
        <div class="two wide column">
          <a href="{{ route('observer.edit', $observation->id)}}" class="tiny ui primary button">Editar</a>
        </div>
        {{--  COLUMNA UNO  --}} 
        <div class="four wide column">
          <h3>Escenario:</h3>
          <h3>Nota:</h3>
          <h3>Creado:</h3>
          <h3>Autor:</h3>
          <h3>ID Observación:</h3>
          <h3>Curso:</h3>
          <h3>Rol Creador:</h3>
          <h3>Observación:</h3>
        </div>
        {{--  COLUMNA UNO  --}}
        <div class="eight wide column">
          <h3>{{ $observation->observerscene->name }}</h3>
          <h3>{{ $observation->observernote->name }}</h3>
          <h3>{{ $observation->created_at }}</h3>
          
          <h3>{{ $observation->creator->name }}</h3>
          <h3>{{ $observation->id }}</h3>
          <h3>{{ $observation->course->name }}</h3>
          {{--<h3>{{ $observation->creatorrole->name }}</h3>--}}
          <h3>{{ $observation->observation }}</h3>
        </div>  
    </div>
    <hr>
  </div>
@endsection