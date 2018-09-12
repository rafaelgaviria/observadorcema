@extends('layouts.app')

@section('content')
<div class="ui container">
<a href="{{ URL::previous() }}"><i class="angle left icon fz2em"></i> Regresar</a>

<h1 class="ui dividing header">Comentarios - Tercer periodo</h1>

  <div class="ui statistics">
    <div class="blue statistic">
      <div class="value">
        {{$total_comentarios}}
      </div>
      
    </div>
  </div>

  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Foto</th>
        <th>Nombres</th>
        <th>Curso</th>
        <th>Escenario</th>
        <th>Fecha</th>
        <th>Comentario</th>
        <th>Autor</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($observations as $observation)
      <tr>
        <td>{{ $observation->id }}</td>
        <td><img src="{{asset('images/avatar/'.$observation->user->document.'.jpg')}}" class="avatar"></td>
        <td>{{ $observation->user->name }}</td>
        <td>{{ $observation->course->name }}</td>
        <td>{{ $observation->observerscene->name }}</td>
        <td>{{ $observation->created_at }}</td>
        <td>{{ $observation->observation }}</td>
        <td>{{ $observation->creator->name }}</td>
        

        <td>
          <a href="{{ route('observer.show', $observation->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
          <a href="{{ route('observer.edit', $observation->id)}}" class="ui tiny icon button" style="display:inline-block !important">
            <i class="edit blue icon"></i>
          </a>
              
          {{--
          {!!Form::open(['route' => ['observer.destroy', $observation->id],
          'method' => 'DELETE']) !!}
          <button class="ui tiny icon button">
            <i class="cancel red icon"></i>
          </button>
          --}}
          {!! Form::close() !!}
          
        </td>
      </tr>
      @endforeach 
  
    </tbody>
    <tfoot>
      <tr>
        <th colspan="10">
            {{$observations->render()}}  
        </th>
    </tr>
  </tfoot>
  </table>
</div>
@endsection

@section('scripts')
  <script>
    $('.ui.accordion')
      .accordion()
    ;
  </script>
@endsection
