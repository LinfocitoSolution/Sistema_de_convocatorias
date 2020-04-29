<!doctype html>
@extends('layouts.plantillapost')
<html>
<head>
<meta charset="utf-8">
<title>Documento sin titulo</title>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<style>
body{
background-image: url('imagenes/ligthblue.jpg');
}
.formulario{
	margin-top:30px;
}

</style>

@section("cabecera")
	<nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
		<a class="navbar-brand  text-white" href="{{url('index')}}" tabindex="-1" >Inicio</a>
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
			</div>
			<div class="card-body">
		
				<form class="form-group" method="POST" action="/users">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
					{{ csrf_field() }}
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Nombre" name="Nombre"> 
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Apellidos" name="Apellido">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="nombre ususario" name="Username">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Fecha_Nacimiento" name="Fecha_nacimiento">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Carrera" name="Carrera">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="email" name="Email">
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
						<input type="password" class="form-control" placeholder="confirmPassword" name="confirmpassword">
					</div>
						
					<button type="submit" class="btn btn-primary" > Registrarr </button>

				</form>
		
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Si ya tienes cuenta inicia sesion?<a href="#">Login</a>
				</div>
			</div>
		</div>
	
	</div>
</div>

 @endsection
</body>
@section("pie")
    @endsection
</html>