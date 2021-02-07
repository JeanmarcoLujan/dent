@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EXAMENES AUXILIARES</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('examen.index') }}" title="Atrás"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="pull-left">
                <h3>Editar</h3>
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
            <form action="{{ route('examen.update',$exam->id) }}"  method="POST" >
                @csrf
                @method('PUT')
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Exámen auxiliar:</strong>
                            <input type="text" name="name" value="{{ $exam->name }}" class="form-control" placeholder="Exámen auxiliar">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            <textarea class="form-control" style="height:50px" name="description"
                                placeholder="Descripción">{{ $exam->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Editar</button>
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
