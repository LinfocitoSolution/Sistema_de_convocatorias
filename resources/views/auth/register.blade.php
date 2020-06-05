
@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  Registro-Postulante
@endsection

@section("infoGeneral")
     
	   <!--@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif-->

		<div class="contenido-medio">
			<div class="container">	
				<div class="d-flex justify-content-center h-100">
					<div class="card">
						<!--cabeza del formulario-->
						<div class="card-header text-white">
							<h3>Registro Postulante</h3>
						</div>  
						<!--fin de cabeza-->
					  <!--Inicio cuerpo de formulario-->  
						  <div class="card-body bg-dark">
					
							<form class="form-group" method="POST" action={{url("/register")}}>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          	 
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<!--campo nombre-->
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-success px-3"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" class="form-control text-capitalize" placeholder="Nombre" name="name" id="Nombre" value="{{ old('name') }}"> 
								</div>
								
								
								@if (count($errors->get('name')) > 0)
									<div class="alert alert-light p-0 mb-2">
												<ul>
															 
													    @foreach ($errors->get('name') as $error)
														   	@php( $prev = null)
																@if ($prev != $error)
																	<li>{{ $error }}</li>
																@endif 
															@php( $prev = $error)
														@endforeach
												</ul>
									</div>
								@endif
								<!--experimentomensaje de error</div>
									<input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
									name="name"
									placeholder="Ingrese Nombre" type="text"  value="{{ old('name', isset($user) ? $user->name : '') }}"> 
								</div>
								<div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
									{{ $errors->has('name')? $errors->first('name') : ''  }}
								</div>-->
								<!--campo apellido-->

								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text px-3"><i class="fas fa-user-tie"></i></span>
									</div>
									<input type="text" class="form-control text-capitalize" placeholder="Apellidos" name="lastname" value="{{ old('lastname') }}">
								</div>
								@if (count($errors->get('lastname')) > 0)
									<div class="alert alert-light p-0 mb-1">
												<ul>
															 
													    @foreach ($errors->get('lastname') as $error)
														   	@php( $prev = null)
																@if ($prev != $error)
																	<li>{{ $error }}</li>
																@endif 
															@php( $prev = $error)
														@endforeach
												</ul>
									</div>
								@endif
								<!--campo nombre de usuario -->
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-success"><i class="fa fa-user-shield"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Nombre de usuario" name="username" value="{{ old('username') }}" >
								</div>
								@if (count($errors->get('username')) > 0)
									<div class="alert alert-light p-0 mb-1">
												<ul>
															 
													    @foreach ($errors->get('username') as $error)
														   	@php( $prev = null)
																@if ($prev != $error)
																	<li>{{ $error }}</li>
																@endif 
															@php( $prev = $error)
														@endforeach
												</ul>
									</div>
								@endif
								<!--campo carrera--->
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-success"><i class="fa fa-graduation-cap"></i></span>
									</div>
									<!--<input type="text" class="form-control text-capitalize" placeholder="Carrera" name="career" value="{ old('career') }}">-->
									<select name="career" class="custom-select form-control">
										<option selected class="text-muted"value="sistemas">Ing Sistemas</option>
										<option value="informatica">Ing Informatica</option> 
									  </select>
								</div>
								<!--campo email-->
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-success px-3"><i class="fa fa-at"></i></span>
									</div>
									<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" >
									{{-- <br><small id="emailHelp" class="form-text text-muted">usuario@example.com</small>comment --}}
								</div>

								@if (count($errors->get('email')) > 0)
									<div class="alert alert-light p-0 mb-1">
												<ul>
															 
													    @foreach ($errors->get('email') as $error)
														   	@php( $prev = null)
																@if ($prev != $error)
																	<li>{{ $error }}</li>
																@endif 
															@php( $prev = $error)
														@endforeach
												</ul>
									</div>
								@endif
								<!--campo contraseña-->
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-success px-3"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="Contraseña" name="password">
								</div>
								
								@if (count($errors->get('password')) > 0)
									<div class="alert alert-light p-0 mb-1">
												<ul>
															 
													    @foreach ($errors->get('password') as $error)
														   	@php( $prev = null)
																@if ($prev != $error)
																	<li>{{ $error }}</li>
																@endif 
															@php( $prev = $error)
														@endforeach
												</ul>
									</div>
								@endif
								<!--campo confirmar contraseña-->
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-success px-3"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control"  placeholder="Confirmar contraseña" name="confirmpassword">
								</div>
								@if (count($errors->get('confirmpassword')) > 0)
									<div class="alert alert-light p-0 mb-1">
												<ul>
															 
													    @foreach ($errors->get('confirmpassword') as $error)
														   	@php( $prev = null)
																@if ($prev != $error)
																	<li>{{ $error }}</li>
																@endif 
															@php( $prev = $error)
														@endforeach
												</ul>
									</div>
								@endif
								<small id="passwordHelpBlock" class="form-text text-white mt-3"> La contraseña debe tener 8-25 caracteres, contener al menos una letra y  un numero, puede ser mayusculas , <br>no debe contener espacios, caracteres especiales, o emoji. </small>
								
								<button type="submit" class="btn btn-success rounded-pill active btn-block mt-3" > Registrar </button>

						  </form>
						    <!--Inicio de pie formulario-->
						       <div class="card-footer">
								   <div class="d-flex justify-content-center links text-white mt-2">
								    Si ya tienes cuenta iniciar sesion?<a href="{{url('login')}}" class="text-warning">Login</a>
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