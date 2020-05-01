<!doctype html>
{{--  @extends("logins.plantillaLogin")  --}}
<html>
	{{-- <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">--> --}}
	
	<head>
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>login</title>
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		
		<script>
			window.Laravel = <?php echo json_encode([
				'csrfToken' => csrf_token(),
			]); ?>
		</script>
		
	</head>


	<style>
		.container{
			margin-top:20px;
		}

	</style>
	<body>
		{{-- noregister ser cambio por --}}
		@section("cabecera")
			<nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
				<a class="navbar-brand  text-white" href="{{url('index')}}" tabindex="-1" >Inicio</a>
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
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
			<div class="container">
				<div class="d-flex justify-content-center h-100">
					<div class="card">
						<div class="card-header">
							<h3>Login Usuario</h3>
							<div class="d-flex justify-content-end social_icon">
								<span><i class="fab fa-facebook-square"></i></span>
								<span><i class="fab fa-google-plus-square"></i></span>
								<span><i class="fab fa-twitter-square"></i></span>
							</div>
						</div>				
						<div class="card-body">
							<form class= "form group" method="POST" action="{{url('/verificar')}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
								<input type="text" class="form-control" placeholder="Nombre Usuario o Email" name="NombreUsuarioP" id="NombreUsuarioP" value="{{ old('NombreUsuarioP') }}">
								</div>
								
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="Contraseña" name="passwordP" id="password">
								</div>
								<small id="passwordHelpBlock" class="form-text text-muted"> Tu contraseña debe tener 8-20 caracteres, contener letras y numeros , <br>no debe contener espacios, caracteres especiales, o emoji. </small>
								{{-- <!--<div class="row align-items-center remember">
									<input type="checkbox">RECUERDAME
								</div>--> --}}

								<br>

								<div class="form-group" >
									<button class="btn btn-outline-primary mr-sm-2" type="submit">INGRESAR</button>
								</div>
							</form>
						</div>

						<div class="card-footer">
							<div class="d-flex justify-content-center links">
								No tienes cuenta?<a href="{{url('registro_postulante')}} ">REGISTRATE</a>
							</div>
							<div class="d-flex justify-content-center">
								<a href="#">Olviste tu contraseña?</a>
							</div>
						</div>
					</div>
				</div>
			</div>			
		@endsection		
	</body>	 
</html>