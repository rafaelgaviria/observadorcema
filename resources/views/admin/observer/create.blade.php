@extends('layouts.app')

@section('content')
<a href="{{ URL::previous() }}"><i class="angle left icon fz2em"></i> Regresar</a>
<br>
<br>
  <div class="ui container">
    <h2 class="ui dividing header">Creación de Observación para: {{$user_id->name}}</h2>
    {!! Form::open(['route' => 'observer.store'])!!}
    {{ csrf_field() }}

    @include('admin.observer.partials.form') 
    {!! Form::close() !!}
  </div>
@endsection