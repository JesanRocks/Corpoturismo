@extends('layouts.dashboard')
@section('titulo',"Registro de usuarios")

@section('recuadro')

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Registro de usuarios</h3>
    </div>

    <form method="POST" action="{{ url('usuarios') }}" class="form-horizontal" role="form">
      {{ csrf_field() }}
      <div class="box-body">

        <div class="form-group">
          <label for="nombres" class="col-sm-2 control-label">Nombres</label>
          <div class="col-sm-10">
            <input class="form-control" id="nombres" name="nombres" placeholder="Nombres">
          </div>
        </div>

        <div class="form-group">
          <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
          <div class="col-sm-10">
            <input class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
          </div>
        </div>

        <div class="form-group">
          <label for="cedula" class="col-sm-2 control-label">Cédula</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cédula">
          </div>
        </div>

        <div class="form-group">
          <label for="nacimiento" class="col-sm-2 control-label">Nacimiento</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="nacimiento" name="nacimiento" placeholder="Nacimiento">
          </div>
        </div>
  
        <div class="form-group">
          <label for="Sexo" class="col-sm-2 control-label">Sexo</label>
          <div class="col-sm-10">
            <label>
              <input type="radio" name="sexo" id="sexo" value="M"> Masculino
            </label>
            <label>
              <input type="radio" name="sexo" id="sexo" value="F"> Femenino
            </label>            
          </div>
        </div>

        <div class="form-group">
          <label for="parroquia" class="col-sm-2 control-label">Parroquia</label>
          <div class="col-sm-10">
            <select class="form-control" id="parroquia_id" name="parroquia_id">
              <option value="0">Seleccionar</option>
            @foreach( $parroquias as $parroquia)
              <option value="{{ $parroquia->id }}">{{ $parroquia->dsc }}</option>
            @endforeach 
            </select>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="direccion" class="col-sm-2 control-label">Dirección</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="direccion" name="direccion" placeholder="Dirección"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="rol" class="col-sm-2 control-label">Rol</label>
          <div class="col-sm-10">
            <select class="form-control" id="rol_id" name="rol_id" required>
              <option value="0">Seleccionar</option>
            @foreach( $roles as $rol)
              <option value="{{ $rol->id }}">{{ $rol->dsc }}</option>
            @endforeach 
            </select>
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{ route('usuarios.index') }}" class="btn btn-default">Cancelar</a>
        <button type="submit" class="btn btn-info pull-right">Registrar</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
@endsection