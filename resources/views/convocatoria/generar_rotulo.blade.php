
@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  CREAR_ROTULO
@endsection

@section("infoGeneral")

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-5"> 
           <!---cabeza--> 
            <div class="card-header text-white">
              <h2>Verifique sus datos:</h2>
            </div>
            <!---cuerpo--->
          <div class="card-body">
             <form onsubmit="save()" class="form-group" method="POST" action="{{route("rotulo.guardar")}}" enctype="multipart/form-data" >
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <!--nombre--->
                <div class="form-row">
                 
                    <div class="col-md-6 mb-3">
                        <label for=""class="col-form-label mr-2"><b>Nombres:</b></label>
                        <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="revise sus datos">
                           {{-- <input type="text" class="text" id="name" placeholder="Ingrese su nombre"> --}}
                           <span class="input-group-append">
                            <button class="btn btn-dark text-white" type="button">N</button>
                            </span>
                           <input  type="text" name="name" class="form-control" required disabled {{ $errors->has('name') ? 'is-invalid' : '' }} id="name" value="{{ucfirst(Auth::user()->name)}}">
                           <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
                            {{ $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }}
                          </div>
                        </div>
                    </div>
                      <!-----apellido-->  
               
                    <div class="col-md-6 mb-3">
                        <label for="" class="col-form-label mr-2"><b>Apellidos:</b></label>
                          {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                          <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Revise sus datos">
                            <span class="input-group-append">
                                <button class="btn btn-dark text-white" type="button">A</button>
                            </span>
                              <input type="text" required disabled name="lastname" class="form-control" id="lastname" value="{{ ucfirst(Auth::user()->lastname)}}">
                          </div>
                          <div class="invalid-feedback {{ $errors->has('lastname')? 'd-block' : '' }}">
                            {{ $errors->has('lastname')? $errors->first('lastname') : 'El campo de Apellido es requerido'  }}
                        </div>
                    </div>
                      <!-----Direccion-->  
               
                     <div class="col-md-6 mb-3">
                         <label for="" class=" col-form-label mr-2"><b>Dirección:</b></label>
                          {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                          <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Ingrese la direccion en donde vive">
                            <span class="input-group-append">
                                <button class="btn btn-dark text-white" type="button">D</button>
                            </span>
                            <input type="text" required disabled name="direction" class="form-control" id="direccion" value="{{ ucfirst(Auth::user()->direction)}}">
                          </div>
                          <div class="invalid-feedback {{ $errors->has('lastname')? 'd-block' : '' }}">
                            {{ $errors->has('direction')? $errors->first('lastname') : 'El campo de Apellido es requerido'  }}
                        </div>
                     </div>
                      <!----telefonos-->  
               
                      <div class="col-md-6 mb-3">
                          <label for="" class="col-form-label mr-2"><b>Teléfono:</b></label>
                          {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                          <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Ingrese su número de celular o teléfono">
                             <span class="input-group-append">
                                 <button class="btn btn-dark text-white" type="button">T</button>
                             </span>
                              <input type="text" required disabled name="telephone" class="form-control" id="telefono" value="{{ ucfirst(Auth::user()->telephone)}}">
                          </div>
                          <div class="invalid-feedback {{ $errors->has('telephone')? 'd-block' : '' }}">
                            {{ $errors->has('telephone')? $errors->first('email') : 'Este campo es requerido'  }}
                        </div>
                      </div>
                      <!-----e-mail-->  
                
                       <div class="col-md-6 mb-3">
                            <label for="" class="col-form-label mr-2"><b>E-mail:</b></label>
                            <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Revise sus datos">
                              <span class="input-group-append">
                                  <button class="btn btn-dark text-white" type="button">E</button>
                              </span>
                               <input type="text" name="email" required disabled class="form-control" id="email" value="{{ ucfirst(Auth::user()->email)}}">
                            </div>
                            <div class="invalid-feedback {{ $errors->has('email')? 'd-block' : '' }}">
                              {{ $errors->has('email')? $errors->first('email') : 'Este campo es requerido'  }}
                          </div>
                       </div>
                      <!-----nombre de auxiliatura-->  
                      
                      
                       <div class="col-md-6 mb-3">
                           <label for="" class="col-form-label mr-2"><b>Nombre de Auxiliatura:</b></label>
                             <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Revise sus datos">
                                <span class="input-group-append">
                                   <button class="btn btn-dark text-white" type="button">NA</button>
                                </span>
                                {{-- <p hidden>{{$convocatoria=App\Convocatoria::find($convoca)}}</p> --}}
                                <select class="form-control custom-select " required name="requerimiento" id="requerimientos">
                                  @foreach($call->requerimientos as $item)
                                      <option class="text-dark" value="{{$item->codigo_auxiliatura}}">{{ $item->nombre_auxiliatura }}</option>
                                  @endforeach
                               </select>
                             </div>
                             <div class="invalid-feedback {{ $errors->has('requerimiento')? 'd-block' : '' }}">
                              {{ $errors->has('requerimiento')? $errors->first('requerimiento') : 'Este campo es requerido'  }}
                          </div>
                       </div>
                                   
                       <!----carrera--->
                      
                       <div class="col-md-6 mb-3">
                           <label for="" class="col-form-label "><b>Carrera:</b></label>
                          <div class="input-group" data-toggle="tooltip" data-placement="right" title="Seleccione su carrera">
                             <span class="input-group-append">
                                <button class="btn btn-dark text-white" type="button">C</button>
                             </span>
                               <select  class="custom-select form-control" required id="carrera" name="carrera"> 
                                 @foreach($carreras as $item)
                                   <option class="text-dark" value = "carrera"{{ ($item->id == (Auth::user()->carrera_id)) ? 'selected' : '' }}>{{ $item->name }}</option>
                                 @endforeach	
                               </select>
                           </div>
                           <div class="invalid-feedback {{ $errors->has('carrera')? 'd-block' : '' }}">
                            {{ $errors->has('carrera')? $errors->first('carrera') : 'El campo de Apellido es requerido'  }}
                        </div>
                        </div>
                      
              
                      <!-----documento subir curriculum-->
                      <div class="col-mb-6 mb-3">
                        <label for="exampleFormControlFile1" class="col-form-label mr-2"><b>Subir currículum</b></label>
                        <input type="file" class="form-control-file" name="archivo" id="archivo" required accept="application/pdf" >
                      </div>
                      <div class="invalid-feedback {{ $errors->has('archivo')? 'd-block' : '' }}">
                        {{ $errors->has('archivo')? $errors->first('archivo') : 'El campo de Apellido es requerido'  }}
                    </div>


                    <!--fin row-->  
                   </div>
                        <div class="form-actions text-center mt-3">
                            <a class="btn btn-outline-dark px-4" href="{{route('rotulo.primer')}}">Cancelar</a>
                           <button  class="btn btn-outline-dark"  type="submit" data-toggle="tooltip" data-placement="right" title="Presione el bot&oacute;n para generar el rótulo" >GENERAR RÓTULO</button>
                            {{-- <a href="javascript:save()"> Test</a> --}}
                        </div>
               </div>
             </form>
                        
                  <!---pies-->
                  <div class="card-footer">
                  </div>
                 <!----fin tarjeta-->
              </div>
          </div>
        </div>
      </div>
      
  
  
      
 @endsection
