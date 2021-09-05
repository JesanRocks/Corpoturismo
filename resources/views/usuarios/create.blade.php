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
          <label for="parroquia" class="col-sm-2 control-label">Estado Civil</label>
          <div class="col-sm-10">
            <select class="form-control" id="edocivil_id" name="edocivil_id">
              <option value="0">Seleccionar</option>
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
          <label for="telf_hab" class="col-sm-2 control-label">Telf. Habitación</label>
          <div class="col-sm-10">
             <input class="form-control" id="telf_hab" name="telf_hab" placeholder="Telf. Habitación">
          </div>
        </div>

        <div class="form-group">
          <label for="telf_cel" class="col-sm-2 control-label">Telf. Celular</label>
          <div class="col-sm-10">
             <input class="form-control" id="telf_cel" name="telf_cel" placeholder="Telf. Celular">
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Correo electrónico</label>
          <div class="col-sm-10">
             <input class="form-control" id="email" name="email" placeholder="Correo electrónico">
          </div>
        </div>

        <div class="form-group">
          <label for="parroquia" class="col-sm-2 control-label">Discapacidad</label>
          <div class="col-sm-10">
            <select class="form-control" id="discapacidad_id" name="discapacidad_id">
              <option value="0">Seleccionar</option>
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
              <option value="0">Seleccionar</option>
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
              <option value="0">Seleccionar</option>
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
              <option value="0">Seleccionar</option>
            @foreach( $sectores as $sector)
              <option value="{{ $sector->id }}">{{ $sector->dsc }}</option>
            @endforeach 
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="fecha_ingreso" class="col-sm-2 control-label">Fecha de Ingreso</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" placeholder="Fecha de Ingreso">
          </div>
        </div>

        <div class="form-group">
          <label for="fecha_egreso" class="col-sm-2 control-label">Fecha de Egreso</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="fecha_egreso" name="fecha_egreso" placeholder="Fecha de Egreso">
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