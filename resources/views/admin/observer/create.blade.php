@extends('layouts.app')

@section('content')

  <div class="ui container">
    <h2 class="ui dividing header">Creación de Observación para: {{$user_id}}</h2>
    {!! Form::open(['route' => 'observer.store'])!!}
    {{ csrf_field() }}

    @include('admin.observer.partials.form') 
    {!! Form::close() !!}
  </div>
@endsection