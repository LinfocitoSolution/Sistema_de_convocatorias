<!doctype html>
@extends('layouts.plantillapost')
<html>
<head>
<meta charset="utf-8">
<title>postulante</title>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<style>
.container{
    margin-top:30px;
}
</style>

<body>
@section("cabecera")
<nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
  <a class="navbar-brand  text-white" href="{{url('noregister')}}" tabindex="-1" >Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
@endsection
@section("infoGeneral")

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registro Comisión_Mérito</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="post" action="">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
            
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Nombres" name="Nombres">
						  
					</div>
                    
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Apellidos" name="Apellidos">
						  
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="correo" name="correo">
						  
					</div>
                    
					

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuario" name="Usuario">
						  
					</div>
                    
			       
                    
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="Contraseña" class="form-control" placeholder="Contraseña">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="confirmPaswoord" name="confirmPaswoord">
					</div>
					
					<div class="form-group">
					<a href="#" class="btn btn-primary">Registrar</a>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Si ya tienes cuenta iniciar sesion?<a href="#">Login</a>
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