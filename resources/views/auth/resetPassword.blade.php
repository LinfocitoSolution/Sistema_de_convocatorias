@extends("auth.plantillaLogForm")

@section("infoGeneral")
     
	  <div class="contenido-medio">
			<div class="container">	
				<div class="row justify-content-center">
				  <div class="col-md-6">	
					<div class="card">
					  <!--cabeza del formulario-->	
						<div class="card-header  text-white">
							<h3>Cambiar contraseña</h3>
						</div> 
					  <!--fin de cabeza-->
					  <!--Inicio cuerpo de formulario-->	   
						  <div class="card-body ">
				             <form method="POST" action="{{route('confirmar.password')}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
								 <label class="col-form-label">Contraseña actual</label>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-at icon-cog"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="Contraseña actual" name="passviejo" value="" required>
								</div>
								<label class="col-form-label">Nueva contraseña</label>
								<div class="input-group form-group">
									
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key icon-cog"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="Nueva contraseña" name="password" required>
								</div>
								<div class="invalid-feedback {{ $errors->has('password')? 'd-block' : '' }}">
									{{ $errors->has('password')? $errors->first('password') : 'El campo de Password es requerido'  }}
								</div>
								<label class="col-form-label">Confirmar contraseña</label>
								<div class="input-group form-group">
									
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key icon-cog"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="Confirmar Password" name="password_confirm" required>
								</div>
								<div class="invalid-feedback {{ $errors->has('password_confirm')? 'd-block' : '' }}">
									{{ $errors->has('password_confirm')? $errors->first('password_confirm') : 'Este campo es requerido'  }}
								</div>
								<div class="form-actions text-center mt-4 mb-2">
								    <button type="submit" class="btn btn-outline-dark mr-1"> Cambiar Contraseña </button>
								    <a class="btn btn-outline-dark ml-1" data-toggle="tooltip" data-placement="right" title="Presione el bot&oacute;n para cancelar" href="{{route('postulante.show',ucfirst(Auth::user()->id))}}">Cancelar</a> 
								</div>
							</form>
							    
						 </div>
						 <div class="card-footer"></div>
						 <!--fin de cuerpo de formulario-->
					  </div>
				     </div> 		
				   </div>	
			   </div>	
		  </div>
		
	@endsection
