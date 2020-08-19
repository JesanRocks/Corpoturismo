@extends('layouts.dashboard')
@section('titulo',"Registro de usuarios")

@section('recuadro')

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Solicitud de documento</h3>
    </div>

    <form method="POST" action="{{ url('solicitud') }}" class="form-horizontal" role="form">
      {{ csrf_field() }}
      <div class="box-body">

        <div class="form-group">
          <label for="documento" class="col-sm-2 control-label">Seleccione el documento a tramitar</label>
          <div class="col-sm-10">
            <select class="form-control" id="documento" name="documento">
              {{-- <option value="0">Seleccionar</option> --}}
            @foreach( $documentos as $documento)
              <option value="{{ $documento->id }}">{{ $documento->dsc }}</option>
            @endforeach 
            </select>
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{ route('solicitud.index') }}" class="btn btn-default">Cancelar</a>
        <button type="submit" class="btn btn-info pull-right">Solicitar</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
@endsection