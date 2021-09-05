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
          <label for="cedula" class="col-sm-2 control-label">Usuario</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="username" name="username" placeholder="Cédula" value="{{  old('username',$usuario->username) }}" disabled>
          </div>
        </div>

        <div class="form-group">
          <label for="nacimiento" class="col-sm-2 control-label">Nacimiento</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="nacimiento" name="nacimiento" placeholder="Nacimiento" value="{{ old('nacimiento', $persona->nacimiento) }}">
          </div>
        </div>

        <div class="form-group">
          <label for="parroquia" class="col-sm-2 control-label">Estado Civil</label>
          <div class="col-sm-10">
            <select class="form-control" id="edocivil_id" name="edocivil_id">
              <option value="{{ $persona->edocivil_id }}">{{ $persona->edocivil->dsc }} *</option>
            @foreach( $edocivils as $edocivil)
              <option value="{{ $edocivil->id }}">{{ $edocivil->dsc }}</option>
            @endforeach 
            </select>
            </select>
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
          <label for="telf_hab" class="col-sm-2 control-label">Telf. Habitación</label>
          <div class="col-sm-10">
             <input class="form-control" id="telf_hab" name="telf_hab" placeholder="Telf. Habitación" value="{{  old('telf_hab',$usuario->telf_hab) }}">
          </div>
        </div>
        <div class="form-group">
          <label for="telf_cel" class="col-sm-2 control-label">Telf. Celular</label>
          <div class="col-sm-10">
             <input class="form-control" id="telf_cel" name="telf_cel" placeholder="Telf. Celular" value="{{  old('telf_cel',$usuario->telf_cel) }}">
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Correo electrónico</label>
          <div class="col-sm-10">
             <input class="form-control" id="email" name="email" placeholder="Correo electrónico" value="{{  old('email',$usuario->email) }}">
          </div>
        </div>

        <div class="form-group">
          <label for="parroquia" class="col-sm-2 control-label">Discapacidad</label>
          <div class="col-sm-10">
            <select class="form-control" id="discapacidad_id" name="discapacidad_id">
              <option value="{{ $persona->discapacidad_id }}">{{ $persona->discapacidad->dsc }} *</option>
            @foreach( $discapacidades as $discapacidad)
              <option value="{{ $discapacidad->id }}">{{ $discapacidad->dsc }}</option>
            @endforeach 
            </select>
          </div>
        </div> 

        <div class="form-group">
          <label for="parroquia" class="col-sm-2 control-label">Niveles/Grados Educativos</label>
          <div class="col-sm-10">
            <select class="form-control" id="gradoeduc_id" name="gradoeduc_id">
              <option value="{{ $persona->gradoeduc_id }}">
                {{ $persona->gradoeduc->niveleduc->dsc }} - {{ $persona->gradoeduc->dsc }} *</option>
            @foreach( $gradoseduc as $gradoeduc)
              <option value="{{ $gradoeduc->id }}">
                {{ $gradoeduc->niveleduc->dsc }} - {{ $gradoeduc->dsc }}
              </option>
            @endforeach 
            </select>
          </div>
        </div>  
        <div class="form-group">
          <label for="parroquia" class="col-sm-2 control-label">Cond. Laboral</label>
          <div class="col-sm-10">
            <select class="form-control" id="condlab_id" name="condlab_id">
              <option value="{{ $persona->condlab_id }}">{{ $persona->condlab->dsc }} *</option>
            @foreach( $condiciones as $condicion)
              <option value="{{ $condicion->id }}">{{ $condicion->dsc }}</option>
            @endforeach 
            </select>
          </div>
        </div>        

        <div class="form-group">
          <label for="parroquia" class="col-sm-2 control-label">Sector</label>
          <div class="col-sm-10">
            <select class="form-control" id="sector_id" name="sector_id">
              <option value="{{ $persona->sector_id }}">{{ $persona->sector->dsc }} *</option>
            @foreach( $sectores as $sector)
              <option value="{{ $gradoeduc->id }}">{{ $sector->dsc }}</option>
            @endforeach 
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="fecha_ingreso" class="col-sm-2 control-label">Fecha de Ingreso</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" placeholder="Fecha de Ingreso" value="{{  old('fecha_ingreso',$usuario->fecha_ingreso) }}">
          </div>
        </div>

        <div class="form-group">
          <label for="fecha_egreso" class="col-sm-2 control-label">Fecha de Egreso</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="fecha_egreso" name="fecha_egreso" placeholder="Fecha de Egreso" value="{{  old('fecha_egreso',$usuario->fecha_egreso) }}">
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