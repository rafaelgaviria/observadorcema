@extends('layouts.app')

@section('content')

    {{--  <h2><strong>Detalle Observación:</strong> {{ $observation->user->name }}</h2>
    <h2><strong>Curso:</strong> {{ $observation->course->name }}</h2>  --}}
  {{-- RESUMEN ESTADISTICAS --}}
  <div class="ui statistics">
    <div class="blue statistic">
      <div class="value">
        {{$totalobservaciones}}
      </div>
      <div class="label">Total Observaciones</div>
    </div>
  </div>
{{--
<h2 class="ui dividing header">Tercer periodo</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombres</th>
        <th>Tipo</th>
        <th>Escenario</th>
        <th>Nota</th>
        <th>Fecha</th>
        <th>Comentario</th>
        <th>Autor</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($observations3p as $observations3p)
      <tr>
        <td>{{ $observations3p->id }}</td>
        <td>{{ $observations3p->user->name }}</td>
        <td>{{ $observations3p->observertype->name }}</td>
        <td>{{ $observations3p->observerscene->name }}</td>
        <td>{{ $observations3p->observernote->name }}</td>
        <td>{{ $observations3p->created_at }}</td>
        <td>{{ $observations3p->observation }}</td>
        <td>{{ $observations3p->creator->name }}</td>
        <td>
          <a href="{{ route('observer.show', $observations3p->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
          <a href="{{ route('observer.edit', $observations3p->id)}}" class="ui tiny icon button" style="display:inline-block !important">
            <i class="edit blue icon"></i>
          </a>
          {!!Form::open(['route' => ['observer.destroy', $observations3p->id],
          'method' => 'DELETE']) !!}
          <button class="ui tiny icon button"><i class="cancel red icon"></i></button>
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
  
  <h2 class="ui dividing header">Segundo periodo</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombres</th>
        <th>Tipo</th>
        <th>Escenario</th>
        <th>Nota</th>
        <th>Fecha</th>
        <th>Comentario</th>
        <th>Autor</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($observations2p as $observations2p)
      <tr>
        <td>{{ $observations2p->id }}</td>
        <td>{{ $observations2p->user->name }}</td>
        <td>{{ $observations2p->observertype->name }}</td>
        <td>{{ $observations2p->observerscene->name }}</td>
        <td>{{ $observations2p->observernote->name }}</td>
        <td>{{ $observations2p->created_at }}</td>
        <td>{{ $observations2p->observation }}</td>
        <td>{{ $observations2p->creator->name }}</td>
        <td>
          <a href="{{ route('observer.show', $observations2p->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
          <a href="{{ route('observer.edit', $observations2p->id)}}" class="ui tiny icon button" style="display:inline-block !important">
            <i class="edit blue icon"></i>
          </a>
          {!!Form::open(['route' => ['observer.destroy', $observations2p->id],
          'method' => 'DELETE']) !!}
          <button class="ui tiny icon button"><i class="cancel red icon"></i></button>
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
  
  <h2 class="ui dividing header">Primer periodo</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombres</th>
        <th>Tipo</th>
        <th>Escenario</th>
        <th>Nota</th>
        <th>Fecha</th>
        <th>Comentario</th>
        <th>Autor</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($observations1p as $observations1p)
      <tr>
        <td>{{ $observations1p->id }}</td>
        <td>{{ $observations1p->user->name }}</td>
        <td>{{ $observations1p->observertype->name }}</td>
        <td>{{ $observations1p->observerscene->name }}</td>
        <td>{{ $observations1p->observernote->name }}</td>
        <td>{{ $observations1p->created_at }}</td>
        <td>{{ $observations1p->observation }}</td>
        <td>{{ $observations1p->creator->name }}</td>
        <td>
          
          <a href="{{ route('observer.show', $observations1p->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
          <a href="{{ route('observer.edit', $observations1p->id)}}" class="ui tiny icon button" style="display:inline-block !important">
            <i class="edit blue icon"></i>
          </a>
          {!!Form::open(['route' => ['observer.destroy', $observations1p->id],
          'method' => 'DELETE']) !!}
          <button class="ui tiny icon button"><i class="cancel red icon"></i></button>
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
  --}}
  <h2 class="ui dividing header">Todas las observaciones</h2>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombres</th>
        <th>Tipo</th>
        <th>Escenario</th>
        <th>Nota</th>
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
        <td>{{ $observation->user->name }}</td>
        <td>{{ $observation->observertype->name }}</td>
        <td>{{ $observation->observerscene->name }}</td>
        <td>{{ $observation->observernote->name }}</td>
        <td>{{ $observation->created_at }}</td>
        <td>{{ $observation->observation }}</td>
        <td>{{--{{ $observation->creator->name }}--}}</td>
        <td>
          
          <a href="{{ route('observer.show', $observation->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
          <a href="{{ route('observer.edit', $observation->id)}}" class="ui tiny icon button" style="display:inline-block !important">
            <i class="edit blue icon"></i>
          </a>
          {!!Form::open(['route' => ['observer.destroy', $observation->id],
          'method' => 'DELETE']) !!}
          <button class="ui tiny icon button"><i class="cancel red icon"></i></button>
          {!! Form::close() !!}
          
        </td>
      </tr>
      @endforeach 
    </tbody>
    {{--<tfoot>
      <tr>
        <th colspan="10">
            {{$observations->render()}}  
        </th>
    </tr>
  </tfoot>--}}
  </table>

<br>

@endsection

@section('scripts')
  <script>
    $('.ui.accordion')
      .accordion()
    ;
  </script>
@endsection
