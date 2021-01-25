@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>INGRESOS</h1>
@stop


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('egreso.index') }}" title="Atrás"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="">
                
                <div class="card-body">
                    <table class="table " id="">
                        <thead class="thead-dark">
                            <tr align="center">
                                <th>Egreso</th>
                                <th>Fecha de contabilización</th>
                                <th>Fecha de documento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr align="center">
                                <td>{{$egreso->egreso}} </td>
                                <td>{{$egreso->docdate}} </td>
                                <td>{{$egreso->taxdate}}</td>
                            </tr>
                        </tbody>
                    </table>            
                </div>
            </div>
            
                <div class="card-header">
                    DETALLE
                </div>
                <div class="card-body">
                    <table class="table  table-bordered table-responsive-lg" id="data-table-ingreso">
                        <thead>
                            <tr align="center">
                                <th>Concepto</th>
                                <th>Cantidad</th>
                                <th>Importe unitario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($egreso->edetails as $d)
                                <tr>
                                    <td><a href="{{ route('concepto.index') }}">{{$d->concept->name}}</a> </td>
                                    <td align="right">{{$d->quantity}} </td>
                                    <td align="right">{{$d->amount}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>            
                </div>
            
        </div>
    </div>
    

@stop

@section('css')

@stop

@section('js')

    <script>
        
    </script>

    
@stop
