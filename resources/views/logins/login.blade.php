@extends("logins.plantillaLogForm")

@section("htmlheader_title")
  LOGIN
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
	
		<div classs=contenido-login>
			<div class="container">
				<div class="d-flex justify-content-center h-100">
					<div class="card">
						<div class="card-header">
							<h3>Login Usuario</h3>
						</div>
						<!--cuerpo del login-->				
						<div class="card-body">
							<form class= "form group" method="POST" action="{{ route('login') }}">
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
								<div class="form-group" >
									<button class="btn btn-outline-primary mr-sm-2" type="submit">INGRESAR</button>
								</div>
							</form>
						
                           <!--footer de login--> 
						   <div class="card-footer">
							   <div class="d-flex justify-content-center links">
								   No tienes cuenta?<a href="{{url('registro_postulante')}} ">REGISTRATE</a>
							   </div>
							   <div class="d-flex justify-content-center">
								<a href="#">Olviste tu contraseña?</a>
							   </div>
						   </div>
							<!--fin de footer-->
						</div>
						<!--fin cuerpo login-->
					</div>
				</div>
			</div>
		</div>
		
@endsection		
	