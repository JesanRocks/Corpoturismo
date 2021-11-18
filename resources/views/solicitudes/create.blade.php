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
          <label for="documento" class="col-sm-3 control-label">Seleccione el documento a tramitar</label>
          <div class="col-sm-9">
            <select class="form-control" id="documento" name="documento">
              {{-- <option value="0">Seleccionar</option> --}}
            @foreach( $documentos as $documento)
              <option value="{{ $documento->id }}">{{ $documento->dsc }}</option>
            @endforeach 
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="periodo" class="col-sm-3 control-label">Indique el periodo en curso</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="periodo" id="periodo" placeholder="2020 - 2021">
          </div>
        </div>

        <div class="form-group">
          <label for="fecha_inicio" class="col-sm-3 control-label">Fecha de inicio</label>
          <div class="col-sm-9">
            <input class="form-control" type="date" name="fecha_inicio" id="fecha_inicio" min="{{ now() }}">
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