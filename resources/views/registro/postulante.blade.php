<!doctype html>
@extends('layouts.plantillapost')
<html>
	<head>
		<title>Registro - Postulante</title>
    <style>	
		.formulario{
		 margin-top:30px;
	 }
	</style>	
    </head>
	
	 

	@section("cabecera")
		<nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
				<a class="navbar-brand  text-white" href="{{url('noregister')}}" tabindex="-1" >Inicio</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</nav>
	@endsection
@section("infoGeneral")

	<body>

		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

			<div class="formulario">
				<div class="d-flex justify-content-center h-100">
					<div class="card">
						<div class="card-header">
							<h3>Registro Postulante</h3>
							<div class="d-flex justify-content-end social_icon">
								<span><i class="fab fa-facebook-square"></i></span>
								<span><i class="fab fa-google-plus-square"></i></span>
								<span><i class="fab fa-twitter-square"></i></span>
							</div>
						
						<div class="card-body">
					
							<form class="form-group" method="POST" action={{url("/users")}}>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          	 
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Nombre" name="Nombre"  value="{{ old('Nombre') }}"> 
								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Apellidos" name="Apellido" value="{{ old('Apellido') }}">
								</div>
								
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Nombre de usuario" name="Username" value="{{ old('Username') }}" >
								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Carrera" name="Carrera" value="{{ old('Carrera') }}">
								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="email" class="form-control" placeholder="Email" name="Email" value="{{ old('Email') }}" >
									{{-- <br><small id="emailHelp" class="form-text text-muted">usuario@example.com</small>comment --}}
								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="Password" name="Password">
								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="Confirmar Password" name="confirmpassword">
								</div>
								<small id="passwordHelpBlock" class="form-text text-muted"> Tu contraseña debe tener 8-20 caracteres, contener letras y numeros , <br>no debe contener espacios, caracteres especiales, o emoji. </small>
								
								<button type="submit" class="btn btn-primary" > Registrar </button>

							</form>
						<div class="card-footer">

							<div class="d-flex justify-content-center links">
								Si ya tienes cuenta iniciar sesion?<a href="{{url('login')}}">Login</a>
							</div>
	</body>
	@endsection
	@section("pie")
	@endsection
