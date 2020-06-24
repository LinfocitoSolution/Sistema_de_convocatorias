@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  EDITAR_POSTULANTE
@endsection
@section("infoGeneral")
<div classs=contenido-postulante>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
              <div class="card mt-5">
                  <!---cabeza del perfil--->
                   <div class="card-header text-white">
                     <h3>Editar Perfil</h3>
                   </div>
        
                  <!--cuerpo del perfil-->				
                   <div class="card-body">
                    
                    <form class="form-vertical" action="{{ route('postulante.update', $user->id) }}" method="POST" autocomplete="off">
                        {{ method_field('PUT')}}
                        {{ csrf_field() }}
                        <div class="form-row">
                            <!----nombre-->
                             <div class="col-md-6 mb-3">
                                 <label class="col-form-label" for="name">Nombre</label>
                                 <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 50 caracteres <br> -M&iacute;nimo 3 caracteres <br> -No acepta caracteres especiales">
                                     <span class="input-group-append">
                                         <button class="btn btn-dark text-white" type="button">N</button>
                                     </span>
                                     <input
                                             class="form-control text-capitalize {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                             name="name"
                                             placeholder="Ingrese Nombre" type="text"  value="{{ old('name', isset($user) ? $user->name : '') }}">
                                 </div>
                         
                                 <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
                                     {{ $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }}
                                 </div>
                             </div>
                         
                          <!------apellido--->
                             <div class="col-md-6 mb-3">
                                 <label class="col-form-label" for="lastname">Apellido</label>
                                 <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacuteximo 50 caracteres <br> -No acepta caracteres especiales <br>-No acepta n&uacute;meros">
                                     <span class="input-group-append">
                                         <button class="btn btn-dark text-white" type="button">A</button>
                                     </span>
                                     <input
                                             class="form-control text-capitalize {{ $errors->has('lastname') ? 'is-invalid' : '' }}"
                                             name="lastname"
                                             placeholder="Ingrese apellido " type="text" value="{{ old('lastname', isset($user) ? $user->lastname : '') }}">
                                 </div>
                         
                                 <div class="invalid-feedback {{ $errors->has('lastname')? 'd-block' : '' }}">
                                     {{ $errors->has('lastname')? $errors->first('lastname') : 'El campo de Apellido es requerido'  }}
                                 </div>
                             </div>
                           <!----E-mail--->
                             <div class="col-md-6 mb-3">
                                 <label class="col-form-label" for="email">Email</label>
                                 <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Sigue el ejemplo">
                                     <span class="input-group-append">
                                         <button class="btn btn-dark text-white" type="button">@</button>
                                     </span>
                                     <input
                                             class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                             name="email"
                                             placeholder="Ingrese Email: Ej example@gmail.com" type="text"  value="{{ old('email', isset($user) ? $user->email : '') }}">
                                 </div>
                         
                                 <div class="invalid-feedback {{ $errors->has('email')? 'd-block' : '' }}">
                                     {{ $errors->has('email')? $errors->first('email') : 'El campo Email es requerido'  }}
                                 </div>
                             </div>
                         <!----nombre de usuario----->
                             <div class="col-md-6 mb-3">
                                 <label class="col-form-label" for="username">Nombre de Usuario</label>
                                 <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 20 caracteres <br>-Solo se permite alfanum&eacute;rico <br>-No acepta espacios <br>-Se permite may&uacute;sculas">
                                     <span class="input-group-append">
                                         <button class="btn btn-dark text-white" type="button">NU</button>
                                     </span>
                                     <input
                                             class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
                                             name="username"
                                             placeholder="Ingrese Nombre de usuario " type="text" value="{{ old('username', isset($user) ? $user->username : '') }}">
                                 </div>
                         
                                 <div class="invalid-feedback {{ $errors->has('username')? 'd-block' : '' }}">
                                     {{ $errors->has('username')? $errors->first('username') : 'El campo de Nombre de usuario es requerido'  }}
                                 </div>
                             </div>
                             
                            
                         
                          <!----botones--->
                               
                       
                
                        
                    
                 </div>
                  <!----fin del cuerpo perfil--->
                   <!----INICIO DE PIE-->   
                   
                        <div class="form-actions text-center mt-4">
                            <button class="btn btn-outline-dark" type="submit"data-toggle="tooltip" data-placement="left" title="Presione el bot&oacute;n para guardar sus cambios">Actualizar</button>
                            <a class="btn btn-outline-dark" data-toggle="tooltip" data-placement="right" title="Presione el bot&oacute;n para cancelar" href="{{ route('postulante.show',ucfirst(Auth::user()->id))}}">Cancelar</a>
                           
                        </div>
                    
                </form> 
                  <!---FIN DE PIE-->
            </div> 
                <div class="card-footer">
               
                </div> 
          </div>
        </div>
     </div>
</div>  
@endsection		
	