@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <p>Bienvenido al panel de administración.</p>
    <div>
    	
        <section class="statis mt-4 text-center">
	      <div class="row">
	        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
	          <div class="box bg-primary p-3">
	            <i class="uil-eye"></i>
	            <h3>5,154</h3>
	            <p class="lead">Pacientes</p>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
	          <div class="box bg-danger p-3">
	            <i class="uil-user"></i>
	            <h3>245</h3>
	            <p class="lead">Examenes</p>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
	          <div class="box bg-warning p-3">
	            <i class="uil-shopping-cart"></i>
	            <h3>5,154</h3>
	            <p class="lead">Diagnosticos</p>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3">
	          <div class="box bg-success p-3">
	            <i class="uil-feedback"></i>
	            <h3>5,154</h3>
	            <p class="lead">Tratamientos</p>
	          </div>
	        </div>
	      </div>
	    </section>
	     <section class="statistics mt-4">
      <div class="row" align="center">
        <div class="col-lg-4">
          <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
            <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
            <div class="ms-3">
              <div class="d-flex align-items-center">
                <h3 class="mb-0">1,245</h3> <span class="d-block ms-2">Emails</span>
              </div>
              <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
            <i class="uil-file fs-2 text-center bg-danger rounded-circle"></i>
            <div class="ms-3">
              <div class="d-flex align-items-center">
                <h3 class="mb-0">34</h3> <span class="d-block ms-2">Projects</span>
              </div>
              <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box d-flex rounded-2 align-items-center p-3">
            <i class="uil-users-alt fs-2 text-center bg-success rounded-circle"></i>
            <div class="ms-3">
              <div class="d-flex align-items-center">
                <h3 class="mb-0">5,245</h3> <span class="d-block ms-2">Users</span>
              </div>
              <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
