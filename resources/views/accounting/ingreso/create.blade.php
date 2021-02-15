@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>INGRESO</h1>
@stop


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ingreso.index') }}" title="Atrás"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="pull-left">
                <h4>Nuevo</h4>
            </div>
        	<hr>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissable" >
                    <strong>Error!</strong> 
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('ingreso.store') }}" enctype="multipart/form-data">
	            @csrf
	            <div class="row">
	            	<div class="col-xs-4 col-sm-12 col-md-4">
                        <div class="form-group">
                            <strong>Nro ingreso:</strong>
                            <input type="text" name="ingreso" readonly  value="{{$code}}" value="{{ old('ingreso') }}" class="form-control" placeholder="IG000001">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-12 col-md-4">
                        <div class="form-group">
                            <strong>Fecha de contabilizacion:</strong>
                            <input type="date" id="yourDatePicker" readonly  name="docdate"  value="{{ old('docdate') }}" class="form-control ">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-12 col-md-4">
                        <div class="form-group">
                            <strong>Fecha del documento:</strong>
                            <input type="date" name="taxdate" value="{{ old('taxdate') }}" class="form-control" >
                        </div>
                    </div>

	            </div>
	            

	            <div class="card">
	                <div class="card-header">
	                    DETALLE
	                </div>

	                <div class="card-body">
	                    <div style="margin-bottom: 10px;" class="row">
	                        <div class="col-lg-12">
	                            <button type="button" class="btn btn-success add-ingreso-detail">
	                                <i class="fa fa-plus" aria-hidden="true"></i> Agregar
	                            </button>
	                        </div>
	                    </div>
	                    <table class="table table-bordered table-striped table-hover ingreso_detail">
	                        <thead>
	                            <tr>
	                                <th>Concepto</th>
	                                <th> Cantidad</th>
	                                <th>Importe unitario</th>
	                                <th>&nbsp;</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	@foreach(old('concept_id', ['']) as $key => $ingresoDetail)
	                                <tr>
	                                    <td>
	                                        
	                                        <select class="form-control" name ="concept_id[{{$loop->index}}]">
				                              <option value="" disabled=true selected>Seleccionar</option>
				                              	@foreach ($concepts as $c)
							                        <option value="{{$c->id}}">{{$c->name}}</option>
							                    @endforeach
				                            </select>
	                                    </td>
	                                    <td>
	                                        <input
	                                            class="form-control quantity" 
	                                            type="number"
	                                            name="quantity[{{$loop->index}}]"
	                                            value=""
	                                            required
	                                        >
	                                    </td>
	                                    <td>
	                                        <input
	                                            class="form-control amount"
	                                            type="number"
	                                            name="amount[{{$loop->index}}]"
	                                            value=""
	                                            required
	                                        >
	                                    </td>
	                                    <td>
	                                        <button type="button" class="btn btn-xs btn-danger delete-ingreso-detail" title="Quitar">
	                                            <i class="fa fa-trash" aria-hidden="true"></i>
	                                        </button>
	                                    </td>
	                                </tr>
	                            @endforeach
	                        </tbody>
	                    </table>
	                </div>
	            </div>

	            <div class="form-group col-xs-12 col-sm-12 col-md-12 text-right">
	                <button class="btn btn-primary" type="submit">
	                    Guardar
	                </button>
	            </div>
	        </form>
        </div>
    </div>

@stop

@section('css')


@stop

@section('js')
<script>
$(function () {
    let $options = $('table.ingreso_detail tbody');
    let index = $options.find('tr').length;
    $('.add-ingreso-detail').click(function (e) {
        e.preventDefault();

        if($options.find('tr:last select').val() == null)
        	alert("Por favor, seleccione el concepto de ingreso");
        else if (!$options.find('tr:last input[type="number"].quantity').val())
        	alert("Por favor, digitar la cantidad");
        else if (!$options.find('tr:last input[type="number"].amount').val())
        	alert("Por favor, digitar el importe unitario");
        else{
        	if ($options.find('tr:last input[type="number"].amount').val()) {
	            let $newRow = $options.find('tr:last').clone();
	            $newRow.find('td select').prop({
	                value: '',
	                name: 'concept_id[' + index + ']'
	            });
	            $newRow.find('td input[type="number"].quantity').prop({
	                value: '',
	                name: 'quantity[' + index + ']'
	            });
	            $newRow.find('td input[type="number"].amount').prop({
	                value: '',
	                name: 'amount[' + index + ']'
	            });
	            index++;
	            $newRow.appendTo($options);
	        }
        }

        


    });



    $options.on('click', '.delete-ingreso-detail', function (e) {
        e.preventDefault();
        if ($options.find('tr').length > 1) {
            $(this).closest('tr').remove();
        }
    });


    

    document.getElementById("yourDatePicker").valueAsDate = new Date();
});
</script>    
@stop
