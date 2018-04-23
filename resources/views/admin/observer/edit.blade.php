@extends('layouts.app')

@section('content')

  <div class="ui container">
    <h1>Editar Observación de: {{ $observation->user->name }}</h1>
    <p><strong>ID Observación: </strong> {{ $observation->id }}</p>
    {!! Form::model($observation, ['route' => ['observer.update', $observation->id],
    'method' => 'PUT']) !!}



      @include('admin.observer.partials.form')
      
    
      {!! Form::close() !!}
  </div>
@endsection

