@extends("auth.plantillaLogForm")

@section("infoGeneral")
     
	  <div class="contenido-medio">
			<div class="container">	
				<div class="d-flex justify-content-center h-100">
					<div class="card">
					  <!--cabeza del formulario-->	
						<div class="card-header text-white">
							<h3>Enviar Recuperar contraseña</h3>
						</div> 
					  <!--fin de cabeza-->
					  <!--Inicio cuerpo de formulario-->	   
						  <div class="card-body">
					       
				             <form method="POST" action="{{url('reset_password')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-at icon-cog"></i></span>
									</div>
									<input type="email" class="form-control" placeholder="Email" name="Email" value="" >
									{{-- <br><small id="emailHelp" class="form-text text-muted">usuario@example.com</small>comment --}}
								</div>
						        <button type="submit" class="btn btn-dark rounded-pill active btn-block mt-3" > Enviar restablecer contraseña </button>

						  </form>
						       
						 </div>
						 <!--fin de cuerpo de formulario-->
					  </div>		
				   </div>	
			   </div>	
		  </div>
		
	@endsection
