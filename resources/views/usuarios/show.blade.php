@extends('layouts.dashboard')
@section('titulo',"Detalles de usuario")

@section('recuadro')
          <div class="box">
            <div class="box-header">
              
              <div>
                <h3 class="box-title">Detalles de usuario</h3>
              </div>
              
            </div>
            <!-- /.box-header -->

            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('img/user.png') }}" alt="User profile picture">

              <h3 class="profile-username text-center">
                {{$usuario->persona->nombres}} {{$usuario->persona->apellidos}}
              </h3>

              <p class="text-muted text-center">{{$usuario->rol->dsc}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Cédula</b> <a class="pull-right">{{$usuario->persona->cedula}}</a>
                </li>
                <li class="list-group-item">
                  <b>Fecha de nacimiento</b> <a class="pull-right">{{$usuario->persona->nacimiento}}</a>
                </li>
                <li class="list-group-item">
                  <b>Estado Civil</b> <a class="pull-right">{{$usuario->persona->edocivil->dsc}}</a>
                </li>
                <li class="list-group-item">
                  <b>Municipio</b> <a class="pull-right">{{$municipio->dsc}}</a>
                </li>
                <li class="list-group-item">
                  <b>Parroquia</b> <a class="pull-right">{{$usuario->persona->parroquia->dsc}}</a>
                </li> 
                
                <li class="list-group-item">
                  <b>Dirección</b> <a class="pull-right">{{$usuario->persona->direccion}}</a>
                </li>
                <li class="list-group-item">
                  <b>Telf. Habitación</b>
                  <a class="pull-right">{{$usuario->telf_hab}}</a>
                </li>
                <li class="list-group-item">
                  <b>Telf. Celular</b>
                  <a class="pull-right">{{$usuario->telf_cel}}</a>
                </li>
                <li class="list-group-item">
                  <b>Correo electrónico</b>
                  <a class="pull-right">{{$usuario->email}}</a>
                </li>

                <li class="list-group-item">
                  <b>Discapacidad</b> <a class="pull-right">{{$usuario->persona->discapacidad->dsc}}</a>
                </li>
                <li class="list-group-item">
                  <b>Nivel/Grado educativo</b>
                  <a class="pull-right">
                    {{$usuario->persona->gradoeduc->niveleduc->dsc}} / {{$usuario->persona->gradoeduc->dsc}}
                  </a>
                </li> 

                <li class="list-group-item">
                  <b>Cond. Laboral</b>
                  <a class="pull-right">{{$usuario->persona->condlab->dsc}}</a>
                </li> 
                <li class="list-group-item">
                  <b>Sector</b>
                  <a class="pull-right">{{$usuario->persona->sector->dsc}}</a>
                </li> 

                <li class="list-group-item">
                  <b>Fecha de Ingreso</b>
                  <a class="pull-right">{{$usuario->fecha_ingreso}}</a>
                </li>
                <li class="list-group-item">
                  <b>Fecha de Egreso</b>
                  <a class="pull-right">{{$usuario->fecha_egreso}}</a>
                </li>
                <li class="list-group-item">
                  <b>Salario</b>
                  <a class="pull-right">{{$usuario->salario}}</a>
                </li>
              </ul>

              <a href="{{ route('usuarios.index') }}" class="btn btn-primary btn-block"><b>Volver</b></a>
            </div>

            <!-- /.box-body -->
          </div>
@endsection