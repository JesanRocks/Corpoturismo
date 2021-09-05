@extends('layouts.dashboard')
@section('titulo',"Actualizar cargo")

@section('recuadro')

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar cargo</h3>
    </div>

    <form method="POST" action="/cargos/{{$cargo->id}}" class="form-horizontal" role="form">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="box-body">

        <div class="form-group">
          <label for="nombres" class="col-sm-2 control-label">Descripción</label>
          <div class="col-sm-10">
            <input class="form-control" id="dsc" name="dsc" placeholder="Gerente de..." value="{{ old('dsc', $cargo->dsc) }}">
          </div>
        </div>

        <div class="form-group">
          <label for="apellidos" class="col-sm-2 control-label">Sueldo</label>
          <div class="col-sm-10">
            <input class="form-control" type="number" step="any" id="sueldo" name="sueldo" placeholder="1.250.00.00" value="{{ old('sueldo', $cargo->sueldo) }}">
          </div>
        </div>

        <div class="form-group">
          <label for="cedula" class="col-sm-2 control-label">Sueldo en letra</label>
          <div class="col-sm-10">
            <input input class="form-control" id="sueldoEscrito" name="sueldoEscrito" placeholder="Un millón doscientos cincuenta mil Bolivares con cero centimos" value="{{  old('sueldoEscrito',$cargo->sueldoEscrito) }}">
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{ route('cargos.index') }}" class="btn btn-default">Cancelar</a>
        <button type="submit" class="btn btn-info pull-right">Actualizar</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
@endsection