@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ESPECIALIDADES</h1>
@stop


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="" title="Create a product"> <i class="fas fa-plus-circle"> Nuevo</i>
                    </a>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <table class="table  table-bordered table-responsive-lg" id="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Especialidad</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($specialties as $s)
                        <tr>
                            <td>{{$s->id}} </td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->description}}</td>
                            <td align="center" width="10%"> <form action="" method="POST">
                                <a href="">
                                    <i class="fas fa-edit"></i>
                                </a>
        
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
         $('#data-table').DataTable({
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
