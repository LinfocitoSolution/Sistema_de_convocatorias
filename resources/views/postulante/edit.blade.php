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
                    <p class="text-danger">(*)Campo obligatorio</p>
                    <form class="form-vertical" action="{{ route('postulante.update', $user->id) }}" method="POST" autocomplete="off">
                        {{ method_field('PUT')}}
                        {{ csrf_field() }}
                        <div class="form-row">
                            <!----nombre-->
                             <div class="col-md-6 mb-3">
                                 <label class="col-form-label" for="name"><b class="text-danger">(*)</b>Nombre</label>
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
                                 <label class="col-form-label" for="lastname"><b class="text-danger">(*)</b>Apellido</label>
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
                                 <label class="col-form-label" for="email"><b class="text-danger">(*)</b>Email</label>
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
                                 <label class="col-form-label" for="username"><b class="text-danger">(*)</b>Nombre de Usuario</label>
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

                        {{-- @if (Auth::user()->roles->first()->name == 'Postulante')    --}}
                         <!----teléfono----->
                            <div class="col-md-6 mb-3">
                                <label class="col-form-label" for="telefono">Teléfono</label>
                                <div class="input-group" data-html="true">
                                    <span class="input-group-append">
                                        <button class="btn btn-dark text-white" type="button">TE</button>
                                    </span>
                                    <input
                                            class="form-control"
                                            name="telephone"
                                            placeholder="Ingrese su número de teléfono o celular" type="number" value="{{ old('telephone', isset($user) ? $user->telephone : '') }}">
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
                                            name="direction"
                                            placeholder="Ingrese su dirección" type="text" value="{{ old('direction', isset($user) ? $user->direction : '') }}">
                                </div>
                            </div>
                        <!-- postulación actual --> 
                        <div class="col-md-6 mb-3">
                            <label class="col-form-label" for="">Postula a</label>
                            <div class="input-group" data-html="true">
                                <span class="input-group-append">
                                    <button class="btn btn-dark text-white" type="button">PA</button>
                                </span>
                                @if ($curriculum != null)
                                    <input
                                        class="form-control"
                                        name="postulacion"
                                        placeholder="Ingrese su dirección" type="text" value="{{$user->requerimientos->first()->nombre_auxiliatura}}" disabled>
                                @else
                                <input
                                        class="form-control"
                                        name="postulacion"
                                        type="text" value="No se ha registrado ninguna postulación" disabled>
                                @endif
                            </div>
                        </div>
                        {{-- @endif --}}
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
	