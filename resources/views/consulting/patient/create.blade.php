@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PACIENTES</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('paciente.index') }}" title="Atrás"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="pull-left">
                <h4>Nuevo</h4>
                <hr>
            </div>
        
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

            <form action="{{ route('paciente.store') }}" method="POST" >
                @csrf
        
                <div class="row">
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Documento de identidad (DNI):</strong>
                            <input type="text" name="dni" value="{{ old('dni') }}" class="form-control" placeholder="DNI">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <strong>Sexo:</strong><br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sex" id="sexM"  value="M" checked>
                          <label class="form-check-label" for="sexM">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sex" id="sexF" value="F">
                          <label class="form-check-label" for="sexF" >Femenino</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            <input type="text" name="firstname" value="{{ old('firstname') }}" class="form-control" placeholder="Nombres">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="Dirección">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Fecha de nacimiento:</strong>
                            <input type="date" name="birth" value="{{ old('birth') }}" class="form-control" >
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Correo eléctronico:</strong>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Correo eléctronico">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Apoderado:</strong>
                            <input type="text" name="apoderado" value="{{ old('apoderado') }}" class="form-control" placeholder="Apoderado">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
        
            </form>
        </div>
    </div>
@stop

@section('css')


@stop

@section('js')


@stop
