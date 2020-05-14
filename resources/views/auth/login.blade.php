@extends("auth.plantillaLogForm")

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
						<div class="card-header bg-warning text-white">
							<h3>Login Usuario</h3>
						</div>
						<!--cuerpo del login-->				
						<div class="card-body bg-primary">
							<form class= "form group mt-2" method="POST" action="{{ url('login') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-success"><i class="fa fa-user"></i></span>
									</div>
								       <input type="text" class="form-control" placeholder="Nombre de Usuario o email" name="login" id="login" value="{{ old('username') ?: old('email') }}">
								</div> 
								
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-success"><i class="fa fa-key"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
								</div>
								<small id="passwordHelpBlock" class="form-text text-white"> Tu contraseña debe tener 8-20 caracteres, contener letras y numeros , <br>no debe contener espacios, caracteres especiales, o emoji. </small>
								{{-- <!--<div class="row align-items-center remember">
									<input type="checkbox">RECUERDAME
								</div>--> --}}
								<br>
								<div class="form-group" >
									<button class="btn btn-success mr-sm-2  rounded-pill btn-block" type="submit">INGRESAR</button>
								</div>
							</form>
						
                           <!--footer de login--> 
						   <div class="card-footer">
							   <div class="d-flex justify-content-center links text-white mt-3">
								   <h6>No tienes cuenta?</h6>
								   <a href="{{url('postulante/create')}}" class="text-warning"><h6>REGISTRATE</h6></a>
								</div>
							   <div class="d-flex justify-content-center mt-2 ">
								<a href="#" class="text-warning"><h6>Olviste tu contraseña?</h6></a>
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
	