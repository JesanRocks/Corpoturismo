@extends('layouts.dashboard')
@section('titulo',"Usuarios")

@section('recuadro')
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de solicitudes</h3>
                
                <div class="col-xs-2">
                  <a href="{{ route('solicitud.create') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-plus"></i> Nueva solicitud
                  </a>
                </div>

              <div class="box-tools">

                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Cod</th>
                  <th>Usuario</th>
                  <th>Fecha</th>
                  <th>Estatus</th>
                  <th>Tipo</th>
                  <th>Razon</th>
                  <th>Documento</th>
                </tr>
                @foreach($solicitudes as $solicitud)
                <tr>
                  <td>{{ $solicitud->cod}}</td>
                  <td>
                    {{ $solicitud->usuario->persona->nombres }}
                    {{ $solicitud->usuario->persona->apellidos }}
                  </td>
                  <td>{{ $solicitud->created_at}}</td>
                  <td> 
                      @switch($solicitud->estatus->id)
                          @case(1)
                              <span class="label label-warning">Pendiente</span>
                              @break
                          @case(2)
                              <span class="label label-success">Aprobado</span>
                              @break
                          @case(3)
                              <span class="label label-danger">Rechazado</span>
                              @break
                          @default
                                  Default case...
                      @endswitch  
                  </td>
                  <td>{{ $solicitud->documento->dsc}}</td>
                  <td>{{ $solicitud->razon}}</td>
                  <td>
                    @if($solicitud->estatus->id == 2)
                      @switch($solicitud->documento->id)
                          @case(1)
                              <a href="{{ route('constancia', $solicitud->cod) }}" title="" class="btn btn-info btn-sm"> Descargar </a>
                              @break
                          @case(2)
                              <a href="{{ route('vacaciones', $solicitud->cod) }}" title="" class="btn btn-info btn-sm"> Descargar </a>
                              @break
                          @case(3)
                              <a href="{{ route('permiso', $solicitud->cod) }}" title="" class="btn btn-info btn-sm"> Descargar </a>
                              @break
                          @default
                                  Default case...
                      @endswitch 
                    
                    @endif
                  </td>
                </tr>
                @endforeach

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.box -->
          </div>
@endsection