@extends('layouts.dashboard')
@section('titulo',"Detalles del cargo")

@section('recuadro')
          <div class="box">
            <div class="box-header">
              
              <div>
                <h3 class="box-title">Detalles del cargo</h3>
              </div>
              
            </div>
            <!-- /.box-header -->

            <div class="box-body box-profile">
              <h3 class="profile-username text-center">
                Descripción
              </h3>

              <p class="text-muted text-center">{{$cargo->dsc}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Sueldo</b> <a class="pull-right">{{$cargo->sueldo}}</a>
                </li>
                <li class="list-group-item">
                  <b>Sueldo en letra</b> <a class="pull-right">{{$cargo->sueldoEscrito}}</a>
                </li>
              </ul>

              <a href="{{ route('cargos.index') }}" class="btn btn-primary btn-block"><b>Volver</b></a>
            </div>

            <!-- /.box-body -->
          </div>
@endsection