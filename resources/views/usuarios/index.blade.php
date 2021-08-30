@extends('layouts.dashboard')
@section('titulo',"Usuarios")

@section('recuadro')
          <div class="box">
            <div class="box-header">
              
              <div class="col-xs-7 col-sm-8 col-md-10">
                <h3 class="box-title">Listado de usuarios</h3>
              </div>
              
              <div class="col-xs-2">
                <a href="{{ route('usuarios.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Registrar</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                <tr>
                  <th class="hidden-xs hidden-sm">N°</th>
                  <th>Nombres</th>
                  <th class="hidden-xs hidden-sm">Cédula</th>
                  <th colspan="3">Opciones</th>
                </tr>
                @foreach($usuarios as $usuario)
                <tr>
                  <td class="hidden-xs hidden-sm">{{$usuario->id}}</td>
                  <td>{{$usuario->persona->nombres}} {{$usuario->persona->apellidos}}</td>
                  <td class="hidden-xs hidden-sm">{{$usuario->persona->cedula}}</td>
                  <td style="padding-left: 0px; padding-right: 0px;"> 
                    <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info">
                      <i class="fa fa-info"></i>
                      <div class="hidden-xs hidden-sm">Información</div>
                    </a>
                  </td>
                  <td style="padding-left: 0px; padding-right: 0px;">
                    <a href="{{ route('usuarios.edit', $usuario->persona->id) }}" class="btn btn-info">
                      <i class="fa fa-edit"></i> 
                      <div class="hidden-xs hidden-sm">Actualizar</div>
                    </a>
                  </td>
                  <td style="padding-left: 0px; padding-right: 0px;">
                    <form action="{{ route('usuarios.destroy', $usuario->persona->id) }}" method="POST">
                      {{ csrf_field() }} 
                      {{ method_field('DELETE') }}                    
                      <button  class="btn btn-danger" type="submit">
                        <i class="fa fa-trash"></i> 
                        <div class="hidden-xs hidden-sm">Eliminar</div>
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
{{--                 <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr> --}}
              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection