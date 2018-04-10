@extends('layouts.app')

@section('content')

  <div class="ui container">
    <h1>Ver Observación</h1>
    <a href="{{ route('observer.edit', $observation->id)}}" class="mini ui primary button">Editar</a>
    <a href="{{ route('observer.create')}}" class="ui primary button"><i class="plus circle icon"></i>Crear Observación</a>
      <p><strong>ID Observación: </strong>
        <br>{{ $observation->id }}</p>
      <p><strong>Estudiante: </strong>
        <br>{{ $observation->user->name }}</p>
      <p><strong>Tipo de observación: </strong>
        <br>{{ $observation->observertype->name }}</p>
      <p><strong>Escenario: </strong>
        <br>{{ $observation->observerscene->name }}</p>
      
        <p><strong>Nota: </strong>
        <br>{{ $observation->observernote->name }}</p>
      <p><strong>Creado: </strong>
        <br>{{ $observation->created_at }}</p>
      <p><strong>Observación: </strong>
        <br>{{ $observation->observation }}</p>
      <p><strong>Curso: </strong>
        <br>{{ $observation->course->name }}</p>
      <p><strong>Autor: </strong>
        <br>{{ $observation->creator->name }}</p>

  </div>
  <a href="{{ route('observer.edit', $observation->id)}}" class="mini ui primary button">Editar</a>
@endsection