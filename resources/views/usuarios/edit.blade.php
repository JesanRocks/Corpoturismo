@extends('layouts.dashboard')
@section('titulo',"Actualizar de usuario")

@section('recuadro')

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar de usuario</h3>
    </div>

    <form method="POST" action="/usuarios/{{$usuario->id}}" class="form-horizontal" role="form">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="box-body">

        <div class="form-group">
          <label for="nombres" class="col-sm-2 control-label">Nombres</label>
          <div class="col-sm-10">
            <input class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="{{ old('nombres', $persona->nombres) }}">
          </div>
        </div>

        <div class="form-group">
          <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
          <div class="col-sm-10">
            <input class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos', $persona->apellidos) }}">
          </div>
        </div>

        <div class="form-group">
          <label for="cedula" class="col-sm-2 control-label">Cédula</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cédula" value="{{  old('cedula',$persona->cedula) }}">
          </div>
        </div>

        <div class="form-group">
          <label for="nacimiento" class="col-sm-2 control-label">Nacimiento</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="nacimiento" name="nacimiento" placeholder="Nacimiento" value="{{ old('nacimiento', $persona->nacimiento) }}">
          </div>
        </div>
  
        <div class="form-group">
          <label for="Sexo" class="col-sm-2 control-label">Sexo</label>
          <div class="col-sm-10">
            <label>
              <input type="radio" name="sexo" id="sexo" value="M" {{ ($persona->sexo == "M") ? 'checked' : '' }}> Masculino
            </label>
            <label>
              <input type="radio" name="sexo" id="sexo" value="F" {{ ($persona->sexo == "F") ? 'checked' : '' }} > Femenino
            </label>            
          </div>
        </div>

        <div class="form-group">
          <label for="parroquia" class="col-sm-2 control-label">Parroquia</label>
          <div class="col-sm-10">
            <select class="form-control" id="parroquia_id" name="parroquia_id">
              <option value="{{ $persona->parroquia_id }}">{{ $persona->parroquia->dsc }} *</option>
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
            <textarea class="form-control" id="direccion" name="direccion" placeholder="Dirección">{{ old('direccion',$persona->direccion) }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="rol" class="col-sm-2 control-label">Rol</label>
          <div class="col-sm-10">
            <select class="form-control" id="rol_id" name="rol_id" required>
              <option value="{{ $usuario->rol_id }}">{{ $usuario->rol->dsc }} *</option>
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
        <button type="submit" class="btn btn-info pull-right">Actualizar</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
@endsection