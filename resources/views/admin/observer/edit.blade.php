@extends('layouts.app')

@section('content')

  
    <h1>Editar Observación de: {{ $observation->user->name }}</h1>
    <p><strong>ID Observación: </strong> {{ $observation->id }}</p>
    {!! Form::model($observation, ['route' => ['observer.update', $observation->id],
    'method' => 'PUT']) !!}



      @include('admin.observer.partials.form')
      
    
      {!! Form::close() !!}
  
@endsection

