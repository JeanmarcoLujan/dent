@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EGRESOS</h1>
@stop


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('egreso.create') }}" title="Crear egreso"> <i class="fas fa-plus-circle"> Nuevo</i>
                    </a>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table  table-bordered table-responsive-lg" id="data-table-egreso">
                <thead>
                    <tr>
                        <th>Nro Egreso</th>
                        <th>F. contabilización</th>
                        <th>F. documento</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($egresos as $e)
                        <tr>
                            <td>{{$e->egreso}} </td>
                            <td>{{$e->docdate}} </td>
                            <td>{{$e->taxdate}}</td>
                            <td align="center" width="10%"> 
                                <a class="btn btn-xs btn-info" href="{{ route('egreso.show', $e->id) }}">
                                    Detalle
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>            
        </div>
    </div>

@stop

@section('css')


@stop

@section('js')

  <script>
         $('#data-table-egreso').DataTable({
             responsive:true,
             autowidth: false,
             "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No hay resultados",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrando de _MAX_ registros)",
                "search": "Buscar",
                "paginate":{
                    "next":"Siguiente",
                    "previous": "Anterior"
                }
            }
         });
    </script>

    
@stop
