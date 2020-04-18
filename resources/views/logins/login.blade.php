<!doctype html>
@extends("logins.ejemplo")
<html>
{{ csrf_field() }}
	<head>
		<meta charset="utf-8">
		<title>login</title>
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
<nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
  <a class="navbar-brand  text-white" href="{{url('noregister')}}" tabindex="-1" >Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('convocatorias') }}">Convocatorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('calendario') }}">Calendario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#">Informacion</a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#"  id="nabarDropdown" tabindex="-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Malla Curricular
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">Sistemas</a>
          <a class="dropdown-item" href="#">Informatica</a>
          <a class="dropdown-item" href="#">Industrial</a>
        </div>  
      </li>
    </ul>
  </div>
</nav>
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
						<input type="text" class="form-control" placeholder="Nombre Usuario" name="nombre">
					</div>
                    <!--<small id="passwordHelpBlock" class="form-text text-muted"> Nombre de usuario</small>-->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="password">
					</div>
                    <small id="passwordHelpBlock" class="form-text text-muted"> Tu contraseña debe tener 8-20 caracteres, contener letras y numeros , <br>no debe contener espacios, caracteres especiales, o emoji. </small>
					<!--<div class="row align-items-center remember">
						<input type="checkbox">RECUERDAME
					</div>-->
					<br>
					<div class="form-group" >
					<button class="btn btn-outline-primary mr-sm-2" type="submit">INGRESAR</button>
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