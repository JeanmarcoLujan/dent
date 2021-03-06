@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DIAGNOSTICOS</h1>
@stop


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('diagnostico.create') }}" title="Create a product"> <i class="fas fa-plus-circle"> Nuevo</i>
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
            <table class="table  table-bordered table-responsive-lg" id="data-table-diagnostic">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($diagnostics as $d)
                        <tr>
                            <td>{{$d->id}} </td>
                            <td>{{$d->code}}</td>
                            <td>{{$d->description}}</td>
                            <td align="center" width="10%"> <form action="" method="POST">
                                <a href="{{ route('diagnostico.edit',$d->id) }}" title="Editar"><i class="fas fa-edit"></i></a>
        
                                @csrf
                                
                            </form></td>
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
         $('#data-table-diagnostic').DataTable({
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
