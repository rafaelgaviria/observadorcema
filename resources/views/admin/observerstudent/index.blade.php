@extends('layouts.app')

@section('content')
<a href="{{ URL::previous() }}"><i class="angle left icon fz2em"></i> Regresar</a>
<br><br>

<div class="ui grid">
  <div class="twelve wide column">
    <h3><B>Estudiante:</B> {{ $estudiante }}</h3>
  </div>
  <div class="four wide column">
    <a href="{{ route('observer',$idestudiante)}}" class="ui mini green button"><i class="plus circle icon"></i>Crear observación</a>
  </div>
</div>
  {{-- RESUMEN ESTADISTICAS --}}
  <div class="ui statistics">
    <div class="blue statistic">
      <div class="value">
        {{$totalobservaciones}}
      </div>
      <div class="label">Total Observaciones</div>
    </div>
  </div>

<h3 class="ui dividing header">Cuarto periodo</h3>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
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
      @foreach($cuarto_observaciones as $cuarto_observacion)
      <tr>
        <td>{{ $cuarto_observacion->id }}</td>
        <td>{{ $cuarto_observacion->observercategory->name }}</td>
        <td>{{ $cuarto_observacion->observerscene->name }}</td>
        <td>{{ $cuarto_observacion->observernote->name }}</td>
        <td>{{ $cuarto_observacion->created_at }}</td>
        <td>{{ $cuarto_observacion->observation }}</td>
        <td>{{ $cuarto_observacion->creator }}</td>
        <td>
          <a href="{{ route('observer.show', $cuarto_observacion->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
          @if(Auth::user()->id == 16)
            <a href="{{ route('observer.edit', $cuarto_observacion->id)}}" class="ui tiny icon button" style="display:inline-block !important">
              <i class="edit blue icon"></i>
            </a>
            
            {!!Form::open(['route' => ['observer.destroy', $observations3p->id],
            'method' => 'DELETE']) !!}
            <button class="ui tiny icon button"><i class="cancel red icon"></i></button>
            {!! Form::close() !!}
          @endif 
         
        </td>
      </tr>
      @endforeach 
    </tbody>
    {{--
    <tfoot>
      <tr>
        <th colspan="10">
            {{$observations->render()}}  
        </th>
    </tr>
  </tfoot>
  --}}
  </table>
<h3 class="ui dividing header">Tercer periodo</h3>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
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
        <td>{{ $observations3p->observercategory->name }}</td>
        <td>{{ $observations3p->observerscene->name }}</td>
        <td>{{ $observations3p->observernote->name }}</td>
        <td>{{ $observations3p->created_at }}</td>
        <td>{{ $observations3p->observation }}</td>
        <td>{{ $observations3p->creator->name }}</td>
        <td>
          <a href="{{ route('observer.show', $observations3p->id)}}" class="ui tiny icon button" style="display: inline-block !important">
            <i class="eye blue icon"></i>
          </a>
          @if(Auth::user()->id == 16)
            <a href="{{ route('observer.edit', $observations3p->id)}}" class="ui tiny icon button" style="display:inline-block !important">
              <i class="edit blue icon"></i>
            </a>
            {!!Form::open(['route' => ['observer.destroy', $observations3p->id],
            'method' => 'DELETE']) !!}
            <button class="ui tiny icon button"><i class="cancel red icon"></i></button>
            {!! Form::close() !!}
          @endif 
        </td>
      </tr>
      @endforeach 
    </tbody>
    {{--
    <tfoot>
      <tr>
        <th colspan="10">
            {{$observations->render()}}  
        </th>
    </tr>
  </tfoot>
  --}}
  </table>
  
  <h3 class="ui dividing header">Segundo periodo</h3>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
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
        <td>{{ $observations2p->observercategory->name }}</td>
        <td>{{ $observations2p->observerscene->name }}</td>
        <td>{{ $observations2p->observernote->name }}</td>
        <td>{{ $observations2p->created_at }}</td>
        <td>{{ $observations2p->observation }}</td>
        <td>{{ $observations2p->creator->name }}</td>
        <td>
          <a href="{{ route('observer.show', $observations2p->id)}}" class="ui tiny icon button" style="display: inline-block !important">
              <i class="eye blue icon"></i>
            </a>
          @if(Auth::user()->id == 16)
            <a href="{{ route('observer.edit', $observations2p->id)}}" class="ui tiny icon button" style="display:inline-block !important">
              <i class="edit blue icon"></i>
            </a>
          
            {!!Form::open(['route' => ['observer.destroy', $observations2p->id],
            'method' => 'DELETE']) !!}
            <button class="ui tiny icon button"><i class="cancel red icon"></i></button>
            {!! Form::close() !!}
          @endif
        </td>
      </tr>
      @endforeach 
    </tbody>
    {{--
    <tfoot>
      <tr>
        <th colspan="10">
            {{$observations->render()}}  
        </th>
    </tr>
  </tfoot>
  --}}
  </table>
  
  <h3 class="ui dividing header">Primer periodo</h3>
  <table class="ui celled striped small very compact table">
    <thead>
      <tr>
        <th>Id</th>
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
        <td>{{ $observations1p->observercategory->name }}</td>
        <td>{{ $observations1p->observerscene->name }}</td>
        <td>{{ $observations1p->observernote->name }}</td>
        <td>{{ $observations1p->created_at }}</td>
        <td>{{ $observations1p->observation }}</td>
        <td>{{ $observations1p->creator->name }}</td>
        <td>
          <a href="{{ route('observer.show', $observations1p->id)}}" class="ui tiny icon button" style="display: inline-block !important">
              <i class="eye blue icon"></i>
            </a>
            @if(Auth::user()->id == 16)
            <a href="{{ route('observer.edit', $observations1p->id)}}" class="ui tiny icon button" style="display:inline-block !important">
              <i class="edit blue icon"></i>
            </a>

            {!!Form::open(['route' => ['observer.destroy', $observations1p->id],
            'method' => 'DELETE']) !!}
            <button class="ui tiny icon button"><i class="cancel red icon"></i></button>
            {!! Form::close() !!}
          @endif 
         
        </td>
      </tr>
      @endforeach 
    </tbody>
    {{--
    <tfoot>
      <tr>
        <th colspan="10">
            {{$observations->render()}}  
        </th>
    </tr>
  </tfoot>
  --}}
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
