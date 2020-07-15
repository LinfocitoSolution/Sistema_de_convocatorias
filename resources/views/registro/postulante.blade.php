
@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  Registro-Postulante
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

		<div class="contenido-medio">
			<div class="container">	
				<div class="d-flex justify-content-center h-100">
					<div class="card">
					  <!--cabeza del formulario-->	
						<div class="card-header bg-warning text-white">
							<h3>Registro Postulante</h3>
						</div> 
					  <!--fin de cabeza-->
					  <!--Inicio cuerpo de formulario-->	   
						  <div class="card-body bg-primary">
					
							<form class="form-group" method="POST" action={{url("/users")}}>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          	 
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-user"></i></span>
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
								<small id="passwordHelpBlock" class="form-text text-white mt-3"> Tu contraseña debe tener 8-20 caracteres, contener letras y numeros , <br>no debe contener espacios, caracteres especiales, o emoji. </small>

								  <!----teléfono----->
								  <div class="col-md-6 mb-3">
									<label class="col-form-label" for="telefono">Teléfono</label>
									<div class="input-group" data-html="true">
										<span class="input-group-append">
											<button class="btn btn-dark text-white" type="button">TE</button>
										</span>
										<input
												class="form-control"
												name="telefono"
												placeholder="Ingrese su número de teléfono o celular" type="number" value="">
									</div>
								</div>
							<!----dirección----->
								<div class="col-md-6 mb-3">
									<label class="col-form-label" for="direccion">Dirección</label>
									<div class="input-group" data-html="true">
										<span class="input-group-append">
											<button class="btn btn-dark text-white" type="button">DI</button>
										</span>
										<input
												class="form-control"
												name="direccion"
												placeholder="Ingrese su dirección" type="text" value="">
									</div>
								
								<button type="submit" class="btn btn-success rounded-pill active btn-block mt-3" > Registrar </button>

						  </form>
						       <!--Inicio de pie formulario-->
						       <div class="card-footer">
								   <div class="d-flex justify-content-center links text-white mt-2">
								     Si ya tienes cuenta iniciar sesion?<a href="{{url('login')}}"class="text-warning"><h6>Login</h6></a>
							       </div>
							   </div>
							   <!--fin de pie formulario-->
						 </div>
						 <!--fin de cuerpo de formulario-->
					  </div>		
				   </div>	
			   </div>	
		  </div>
		</div>
	@endsection
