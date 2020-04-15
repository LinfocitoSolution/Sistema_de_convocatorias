<!doctype html>
@extends("layouts.plantilla")
<html>
{{ csrf_field() }}
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	</head>

<meta charset="utf-8">
<title>Login Postulantes</title>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<style>
    .container{
		margin-top:20px;
	}
	.form-group{

	}
</style>
<body>
@section("cabecera")
@endsection
@section("infoGeneral")
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Postulante</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Nombre Usuario">
					</div>
                    <!--<small id="passwordHelpBlock" class="form-text text-muted"> Nombre de usuario</small>-->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña">
					</div>
                    <small id="passwordHelpBlock" class="form-text text-muted"> Tu contraseña debe tener 8-20 caracteres, contener letras y numeros , <br>no debe contener espacios, caracteres especiales, o emoji. </small>
					<!--<div class="row align-items-center remember">
						<input type="checkbox">RECUERDAME
					</div>-->
					<br>
					<div class="form-group" >
					<button class="btn btn-outline-primary mr-sm-2" type="menu">INGRESAR</button>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					No tienes cuenta?<a href="#">REGISTRATE</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Olviste tu contraseña?</a>
				</div>
			</div>
		</div>
		@endsection
		
	</body>
	 
</html>