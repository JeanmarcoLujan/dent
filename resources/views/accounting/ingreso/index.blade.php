@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>INGRESOS</h1>
@stop


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ingreso.create') }}" title="Crear ingreso"> <i class="fas fa-plus-circle"> Nuevo</i>
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
            <table class="table  table-bordered table-responsive-lg" id="data-table-ingreso">
                <thead>
                    <tr>
                        <th>Nro Ingreso</th>
                        <th>F. contabilización</th>
                        <th>F. documento</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ingresos as $i)
                        <tr>
                            <td>{{$i->ingreso}} </td>
                            <td>{{$i->docdate}} </td>
                            <td>{{$i->taxdate}}</td>
                            <td align="center" width="10%"> 
                                <a class="btn btn-xs btn-info" href="{{ route('ingreso.show', $i->id) }}">
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
         $('#data-table-ingreso').DataTable({
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
