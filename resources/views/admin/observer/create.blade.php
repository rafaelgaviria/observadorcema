@extends('layouts.app')

@section('content')

  <div class="ui container">
    <h1>Crear Observación</h1>
    {!! Form::open(['route' => 'observer.store'])!!}
    {{ csrf_field() }}

    @include('admin.observer.partials.form') 
    {!! Form::close() !!}
  </div>
@endsection