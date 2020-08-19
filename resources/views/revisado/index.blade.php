@extends('layouts.dashboard')
@section('titulo',"Usuarios")

@section('recuadro')
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tramites</h3>

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
            <div class="box-body table-bordered no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Usuario</th>
                  <th>Fecha</th>
                  <th>Tipo</th>
                  <th>Descripción</th>
                  <th>Responder</th>

                </tr>
                @foreach($solicitudes as $solicitud)
                <tr>
                  <td>{{ $solicitud->cod}}</td>
                  <td>
                    {{ $solicitud->usuario->persona->nombres }}
                    {{ $solicitud->usuario->persona->apellidos }}
                  </td>
                  <td>{{ $solicitud->created_at}}</td>
                  <td>{{ $solicitud->documento->dsc}}</td>
                  <td>{{ $solicitud->razon}}</td>

                  <td>
                    <a href="{{ route('tramites.edit', $solicitud->id) }}" class="btn btn-info btn-sm"> Responder </a>
                  </td>
                </tr>
                @endforeach
{{--                 <tr>
                  <td>102</td>
                  <td>Freddy Rodriguez</td>
                  <td>12-11-2014</td>
                  <td>Otro</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                  <td><button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></td>
                  <td><button type="button" class="btn btn-danger"><i class="fa fa-remove"></i></button></td>
                </tr> --}}

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