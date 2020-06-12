
@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  Registro-Postulante
@endsection

@section("infoGeneral")
     
	  @if (count($errors) > 0)
			<!--<div class="alert alert-danger">-->
				<!--<ul>-->
					@foreach ($errors->all() as $error)
						<!--<li>{{ $error }}</li>-->
						<input type="hidden" id="alerta" name="alerta" value={{$error}}>
					
					@endforeach
				<!--</ul>-->
			<!--</div>-->
			 
		@endif




		
		<div class="contenido-medio">
			<div class="container">	
				<div class="d-flex justify-content-center h-100">
					<div class="card">
						<!--cabeza del formulario-->
						<div class="card-header  text-white">
							<h3>Registro Postulante</h3>
						</div>  
						<!--fin de cabeza-->
					  <!--Inicio cuerpo de formulario-->  
						  <div class="card-body bg-light">
					
							<form class="form-group" method="POST" action={{url("/register")}}>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          	 
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<!--campo nombre-->
								<label for="validationTooltip01"class="text-black">Nombre completo</label>
								<div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 50 caracteres <br> -M&iacute;nimo 3 caracteres <br> -No acepta caracteres especiales" >
									<div class="input-group-prepend">
										<span class="input-group-text px-3"><i class="fas fa-user-alt icon-cog "></i></span>
									
								    </div>
									<input class="form-control text-capitalize {{ $errors->has('name') ? 'is-invalid' : '' }}"
									name="name" 
									placeholder="Ingrese Nombre" type="text"  value="{{ old('name', isset($user) ? $user->name : '') }}"> 
								
								   <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
									{{ $errors->has('name')? $errors->first('name') : ''  }}
								   </div>
								</div>
								<!--campo apellido-->
                                <label for="validationTooltip02"class="text-black">Apellido completo</label>
								<div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacuteximo 50 caracteres <br> -No acepta caracteres especiales <br>-No acepta n&uacute;meros">
									<div class="input-group-prepend">
										<span class="input-group-text  px-3"><i class="fas fa-user-tie icon-cog"></i></span>
									</div>

									<input class="form-control text-capitalize {{ $errors->has('lastname') ? 'is-invalid' : '' }}"
									name="lastname"
									placeholder="Ingrese Apellido" type="text"  value="{{ old('lastname', isset($user) ? $user->lastname : '') }}"> 
								
								<div class="invalid-feedback {{ $errors->has('lastname')? 'd-block' : '' }}">
									{{ $errors->has('lastname')? $errors->first('lastname') : ''  }}
								</div>
								</div>

								
								<!--campo nombre de usuario -->
								<label for="validationTooltip03" class="text-black">Nombre usuario</label>
								<div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 20 caracteres <br>-Solo se permite alfanum&eacute;rico <br>-No acepta espacios <br>-Se permite may&uacute;sculas">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-user-shield icon-cog"></i></span>
									</div>

									<input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
									name="username"
									placeholder="Ingrese Nombre de Usuario" type="text"  value="{{ old('username', isset($user) ? $user->username : '') }}"> 
								
								<div class="invalid-feedback {{ $errors->has('username')? 'd-block' : '' }}">
									{{ $errors->has('username')? $errors->first('username') : ''  }}
								</div>
								</div>

									
								<!--campo carrera--->
								<label for="validationTooltip04"class="text-black">Carrera</label>
								<div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="selecciona la carrera que est&aacute; cursando">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-graduation-cap icon-cog"></i></span>
									</div>

									<!--<input type="text" class="form-control text-capitalize" placeholder="Carrera" name="career" value="{ old('career') }}">-->
									<select name="career" class="custom-select form-control">
										<option selected class="text-muted"value="sistemas">Ing Sistemas</option>
										<option value="informatica">Ing. Informática</option> 
										<option value="electrónica">Ing. Electrónica</option> 
									  </select>
								</div>
								<!--campo email-->
								<label for="validationTooltip05"class="text-black">E-mail</label>
								<div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Sigue el ejemplo">
									<div class="input-group-prepend">
										<span class="input-group-text px-3"><i class="fa fa-at icon-cog"></i></span>
									</div>
									<input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
									name="email"
									placeholder="Ingrese Email: Ej example@gmail.com" type="text"  value="{{ old('email', isset($user) ? $user->email : '') }}"> 
								
								<div class="invalid-feedback {{ $errors->has('email')? 'd-block' : '' }}">
									{{ $errors->has('email')? $errors->first('email') : ''  }}
								</div>
								</div>
									
								<!--campo contraseña-->
								<label for="validationTooltip06"class="text-black">Contraseña</label>
								<div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 25 caracteres <br>-M&iacute;nimo 8 caracteres <br>-No permite caracteres especiales <br>-Debe ingresar al menos una letra y un n&uacute;mero<br>-No permite espacios">
									<div class="input-group-prepend">
										<span class="input-group-text px-3"><i class="fas fa-key icon-cog"></i></span>
									</div>
									<input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
									name="password"
									placeholder="Ingrese Contraseña" type="text"  value="{{ old('password', isset($user) ? $user->password : '') }}"> 
								
								<div class="invalid-feedback {{ $errors->has('password')? 'd-block' : '' }}">
									{{ $errors->has('password')? $errors->first('password') : ''  }}
								</div>
								</div>
								<!--campo confirmar contraseña-->
								<label for="validationTooltip07"class="text-black">Confirma contraseña</label>
								<div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="confirme la contraseña creada anteriormente">
									<div class="input-group-prepend">
										<span class="input-group-text px-3"><i class="fas fa-key icon-cog"></i></span>
									</div>

									<input type="password" class="form-control {{ $errors->has('confirmpassword') ? 'is-invalid' : '' }}"
									name="confirmpassword"
									placeholder="Ingrese Confirmacion de Contraseña" type="text"  value="{{ old('confirmpassword', isset($user) ? $user->password : '') }}"> 
								
								<div class="invalid-feedback {{ $errors->has('confirmpassword')? 'd-block' : '' }}">
									{{ $errors->has('confirmpassword')? $errors->first('confirmpassword') : ''  }}
								</div>
								</div>

									
								<small id="passwordHelpBlock" class="form-text text-black mt-3"> La contraseña debe tener 8-25 caracteres, contener al menos una letra y  un numero, puede ser mayusculas , <br>no debe contener espacios, caracteres especiales, o emoji. </small>
								
								
								<div>
									<a href="#ventana1" button type="submit" class="btn  rounded-pill active btn-block mt-3 btn-lg" data-toggle="modal" >Confirmar </button></a>
								</div>	
								 <br>
								<div class="card-footer">
									<div class="d-flex justify-content-center links text-white mt-2">
									 Si ya tienes cuenta, inicia sesión.<a href="{{url('login')}}" class="text-warning">Login</a>
									</div>
								</div>
								
								
							<!-- ventana de confirmación-->
						
							<br>
									
								 <!-- <a href="#ventana1" class="btn rounded-pill active btn-block mt-3 btn-lg " data-toggle="modal">Registrar</a>-->
									 <div class="modal fade" id="ventana1">
									<div class="modal-dialog">
									 <div class="modal-content">
									<!--header de la ventana-->
									<div class="modal-header">
									 <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Ventana de confirmación de Registro</h4>
									   </div>
									<!--contenido de la ventana-->
									<div class="modal-body">
									<p>¿Esta seguro de querer registrarse?</p>
									</div>
									<!--footer de la ventana-->
									<div class="modal-footer">
										<button type="submit" class="btn  rounded-pill active"> Registrar </button>
								        <button type="button" class="btn rounded-pill active" data-dismiss="modal">Cancelar</button>
									</div>
							     </div>
						     </div>
									</form>
									  <!--Inicio de pie formulario-->
						       
							 <!--fin de pie formulario-->
						</div>
						<!--fin de cuerpo de formulario-->
					  </div>		
				   </div>	
			   </div>	
		  </div>
		</div>
	@endsection
	