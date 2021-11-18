@extends('layouts.dashboard')
@section('titulo',"Actualizar de usuario")

@section('recuadro')

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Responder solicitud</h3>
    </div>

    <form method="POST" action="/tramites/{{$solicitud->id}}" class="form-horizontal" role="form">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="box-body">
        <div class="form-group">
          <label for="documento" class="col-sm-3 control-label">Escoja la respuesta</label>
          <div class="col-sm-9">
            <select class="form-control" id="estatus_id" name="estatus_id">
              <option value="{{$solicitud->estatus_id}}">{{$solicitud->estatus->dsc}} *</option>
            @foreach( $estatus as $estatu)
              <option value="{{ $estatu->id }}">{{ $estatu->dsc }}</option>
            @endforeach 
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="nombres" class="col-sm-3 control-label">Escriba la razón</label>
          <div class="col-sm-9">
            <textarea  class="form-control" id="razon" name="razon" placeholder="Razón"> {{ old('razon', $solicitud->razon) }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="fecha_aprobado" class="col-sm-3 control-label">Fecha de aprobado</label>
          <div class="col-sm-9">
            <input class="form-control" type="date" name="fecha_aprobado" id="fecha_aprobado" value="{{ old('fecha_aprobado', $solicitud->fecha_aprobado) }}">
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{ route('tramites.index') }}" class="btn btn-default">Cancelar</a>
        <button type="submit" class="btn btn-info pull-right">Responder</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
@endsection