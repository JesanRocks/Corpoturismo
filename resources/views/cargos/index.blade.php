@extends('layouts.dashboard')
@section('titulo',"Cargos")

@section('recuadro')
          <div class="box">
            <div class="box-header">
              
              <div class="col-xs-7 col-sm-8 col-md-10">
                <h3 class="box-title">Listado de cargos</h3>
              </div>
              
              <div class="col-xs-2">
                <a href="{{ route('cargos.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Registrar</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                <tr>
                  <th class="hidden-xs hidden-sm">N°</th>
                  <th>Descripción</th>
                  <th class="hidden-xs hidden-sm">Sueldo</th>
                  <th colspan="3">Opciones</th>
                </tr>
                @foreach($cargos as $cargo)
                <tr>
                  <td class="hidden-xs hidden-sm">{{$cargo->id}}</td>
                  <td>{{$cargo->dsc}}</td>
                  <td class="hidden-xs hidden-sm">{{$cargo->sueldo}} Bs</td>
                  <td style="padding-left: 0px; padding-right: 0px;"> 
                    <a href="{{ route('cargos.show', $cargo->id) }}" class="btn btn-info">
                      <i class="fa fa-info"></i>
                      <div class="hidden-xs hidden-sm">Información</div>
                    </a>
                  </td>
                  <td style="padding-left: 0px; padding-right: 0px;">
                    <a href="{{ route('cargos.edit', $cargo->id) }}" class="btn btn-info">
                      <i class="fa fa-edit"></i> 
                      <div class="hidden-xs hidden-sm">Actualizar</div>
                    </a>
                  </td>
                  <td style="padding-left: 0px; padding-right: 0px;">
                    <form action="{{ route('cargos.destroy', $cargo->id) }}" method="POST">
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

              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection