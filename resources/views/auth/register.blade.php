
@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  Registro-Postulante
@endsection
@section("infoGeneral")
		
	 @if (count($errors) > 0)
			<!--<div class="alert alert-danger">-->
				<!--<ul>-->
					@foreach ($errors->all() as $error)
						<!--<li>{ $error }}</li>-->
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
						          <div class="card-body">
					                
							           <form name="fregistro" class="form-group" method="POST" action={{url("/register")}}  id="formReg"  >                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       	 
								           <input type="hidden" name="_token" value="{{ csrf_token() }}">
									     <div class="form-row" > 
										          <!--campo nombre-->
								                     <div class="col-md-6 mb-3">
								                         <label for="validationTooltip01"class="text-black">Nombre completo</label>
								                         <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 50 caracteres <br> -M&iacute;nimo 3 caracteres <br> -No acepta caracteres especiales" >
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
												        </div> 
												   <!--fin campo nombre-->  
								                   <!--campo apellido-->
								                      <div class="col-md-6 mb-3">
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
													  </div>
											      <!----fin campo apellido--->		  		 							
									              <!--campo nombre de usuario -->
									                 <div class="col-md-6 mb-3">
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
													   </div>
												  <!--fin campo usuario--->	   									
									              <!--campo carrera--->
									                 <div class="col-md-6 mb-3">
								                             <label for="validationTooltip04"class="text-black">Carrera</label>
								                         <div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="selecciona la carrera que est&aacute; cursando">
									                         <div class="input-group-prepend">
										                          <span class="input-group-text"><i class="fa fa-graduation-cap icon-cog"></i></span>
									                          </div>									        
									                         <select name="career" class="custom-select form-control">
												                   {{$carreras = App\Carrera::all()}}												  
												                    @foreach($carreras as $item)
													                     <option class="text-dark" value="{{ $item->id }}">{{ $item->name }}</option>
										  		                    @endforeach												  
									                          </select>
										                 </div>
													 </div>	
												  <!---fin campo carrera--> 								
									              <!--campo email-->
									                      <div class="col-md-6 mb-3">
								                             <label for="validationTooltip05"class="text-black">E-mail</label>
								                             <div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Sigue el ejemplo">
									                              <div class="input-group-prepend">
										                             <span class="input-group-text px-3"><i class="fa fa-at icon-cog"></i></span>
									                              </div>
									                              <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
									                                     name="email" id= "email"
									                                     placeholder="Ingrese Email: Ej example@gmail.com" type="text"  value="{{ old('email', isset($user) ? $user->email : '') }}"> 
								
									                                   <div class="invalid-feedback {{ $errors->has('email')? 'd-block' : '' }}">
									            	                      {{ $errors->has('email')? $errors->first('email') : ''  }}
									                                  </div>
										                     </div>
									                    </div>	
									               <!---fin campo email--->
									                <!--campo contraseña-->
									                   <div class="col-md-6 mb-3">
								                           <label for="validationTooltip06"class="text-black">Contraseña</label>
								                            <div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 25 caracteres <br>-M&iacute;nimo 8 caracteres <br>-No permite caracteres especiales <br>-Debe ingresar al menos una letra y un n&uacute;mero<br>-No permite espacios">
									                            <div class="input-group-prepend">
										                           <span class="input-group-text px-3"><i class="fas fa-key icon-cog"></i></span>
									                             </div>
									                             <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
									                                    name="password"
									                                    placeholder="Ingrese Contraseña" type="password"  value="{{ old('password', isset($user) ? $user->password : '') }}"> 
								
								                                       <div class="invalid-feedback {{ $errors->has('password')? 'd-block' : '' }}">
									                                       {{ $errors->has('password')? $errors->first('password') : ''  }}
								                                       </div>
										                     </div>
													   </div>	 
												    <!---fin campo contraseña--->
									                <!--campo confirmar contraseña-->
									                    <div class="col-md-6 mb-3">
								                              <label for="validationTooltip07"class="text-black">Confirma contraseña</label>
								                             <div class="input-group form-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="confirme la contraseña creada anteriormente">
									                             <div class="input-group-prepend">
										                              <span class="input-group-text px-3"><i class="fas fa-key icon-cog"></i></span>
									                              </div>

									                                    <input type="password" class="form-control {{ $errors->has('confirmpassword') ? 'is-invalid' : '' }}"
									                                         name="confirmpassword"
								                                             placeholder="Ingrese Confirmacion de Contraseña" type="password"  value="{{ old('confirmpassword', isset($user) ? $user->password : '') }}"> 
								
								                                         <div class="invalid-feedback {{ $errors->has('confirmpassword')? 'd-block' : '' }}">
									                                           {{ $errors->has('confirmpassword')? $errors->first('confirmpassword') : ''  }}
								                                         </div>
										                         </div>
									                     </div>	 
													 <!------fin campo contraseña confirmada--->
								
									                  <!----teléfono----->
									                     <div class="col-md-6 mb-3">
									                          <label class="text-black" for="telefono">Teléfono</label>
									                           <div class="input-group" data-html="true">
										                              <div class="input-group-append">
											                               <span class="input-group-text px-3"><i class="fas fa-mobile-alt icon-cog"></i></span>
											                          </div>
										                              <input  class="form-control"
												                          name="telephone"
												                          placeholder="Ingrese su número de teléfono o celular" type="number" value="">
									                             </div>
														 </div>
													 <!---fin telefono--->
								                      <!----dirección----->
								                           <div class="col-md-6 mb-3">
									                               <label class="text-black" for="direccion">Dirección</label>
									                               <div class="input-group" data-html="true">
										                                 <div class="input-group-append">
											                                  <span class="input-group-text px-3"><i class="fas fa-building icon-cog"></i></span>
											                             </div>
										                                <input class="form-control"
												                               name="direction"
												                               placeholder="Ingrese su dirección" type="text" value="">
									                                 </div>
															 </div>
													    <!---fin direccion--> 
								             
								             </div>
								              <!---fin row--->	
									          <div class="form-actions text-center"> 
									               <button type="submit" class="btn btn-outline-dark rounded-pill mt-4 btn-lg px-5" >Confirmar </button> 
								              </div>
									
						                 </form>
							        <!--fin de pie formulario-->
							
						        </div> 
						    <!--fin body--->
						    <!---inicio del pie-->
						      <div class="card-footer">
							       <div class="d-flex justify-content-center links text-white my-3">
							          <h6>Si ya tienes cuenta, inicia sesión.</h6><a href="{{url('login')}}" class="text-warning"><h6>Login</h6></a>
						           </div>
						       </div>
						  <!---fin de pie>--->
					 </div>
						<!--fin tarjeta de formulario-->
				</div>		
			</div>	
		</div>	
	@endsection
	