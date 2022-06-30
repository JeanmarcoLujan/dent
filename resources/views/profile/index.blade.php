@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Perfil</h1>
@stop


@section('content')

    <div class="row">
        <div class="col-md-3" align="center">
            <img  src="https://source.unsplash.com/300x300/?profile">
        </div>
        <div class="col-md-6">
            <br><br>
            <b>Datos</b> 
            <table class="table">
              <tr>
                  <td>
                      Usuario
                  </td>
                  <td>
                      {{Auth::user()->name}}
                  </td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td>{{Auth::user()->email}}</td>
              </tr>
          </table>
        </div>
    </div>

@stop

@section('css')
<style type="text/css">
    img {
      border-radius: 70%;
    }
</style>


@stop

