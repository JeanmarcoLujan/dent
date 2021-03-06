@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>COLABORADORES</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('colaborador.index') }}" title="Atrás"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="pull-left">
                <h3>Nuevo</h3>
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
            <br>
            <form action="{{ route('colaborador.store') }}" method="POST" >
                @csrf
        
                <div class="row">
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Documento de identidad (DNI):</strong>
                            <input type="text" name="dni" value="{{ old('dni') }}" class="form-control" placeholder="DNI">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Especialidad</strong>
                            <select class="form-control" name ="specialty_id">
                                <option value="" disabled=true selected>Seleccionar</option>
                                @foreach ($specialties as $s)
                                    <option value="{{$s->id}}">{{$s->name}}</option>
                                @endforeach
                            </select>
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
                        <div class="checkbox checkbox-success">
                            <input name="status"  type="checkbox" value="1">
                            <label for="1" style="padding-left: 15px!important;">Activo</label>
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
