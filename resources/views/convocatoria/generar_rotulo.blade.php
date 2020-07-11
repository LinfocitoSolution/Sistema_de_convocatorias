
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
             <form class="form-group" method="POST" action={{route("rotulo.guardar")}} >
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <!--nombre--->
                <div class="form-row">
                 
                    <div class="col-md-6 mb-3">
                        <label for=""class="col-form-label mr-2"><b>Nombres:</b></label>
                        <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 50 caracteres <br> -M&iacute;nimo 3 caracteres <br> -No acepta caracteres especiales">
                           {{-- <input type="text" class="text" id="name" placeholder="Ingrese su nombre"> --}}
                           <span class="input-group-append">
                            <button class="btn btn-dark text-white" type="button">N</button>
                            </span>
                           <input type="text" class="form-control" id="name" value="{{ucfirst(Auth::user()->name)}}">
                    
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
                              <input type="text" class="form-control" id="lastname" value="{{ ucfirst(Auth::user()->lastname)}}">
                          </div>
                    </div>
                      <!-----Direccion-->  
               
                     <div class="col-md-6 mb-3">
                         <label for="" class=" col-form-label mr-2"><b>Direccion:</b></label>
                          {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                          <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Revise sus datos">
                            <span class="input-group-append">
                                <button class="btn btn-dark text-white" type="button">D</button>
                            </span>
                            <input type="text" class="form-control" id="direccion" value="">
                          </div>
                     </div>
                      <!----telefonos-->  
               
                      <div class="col-md-6 mb-3">
                          <label for="" class="col-form-label mr-2"><b>Teléfono:</b></label>
                          {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                          <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Revise sus datos">
                             <span class="input-group-append">
                                 <button class="btn btn-dark text-white" type="button">T</button>
                             </span>
                              <input type="text" class="form-control" id="telefono" value="">
                          </div>
                      </div>
                      <!-----e-mail-->  
                
                       <div class="col-md-6 mb-3">
                            <label for="" class="col-form-label mr-2"><b>E-mail:</b></label>
                            <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Revise sus datos">
                              <span class="input-group-append">
                                  <button class="btn btn-dark text-white" type="button">E</button>
                              </span>
                               <input type="text" class="form-control" id="email" value="{{ ucfirst(Auth::user()->email)}}">
                            </div>
                       </div>
                      <!-----nombre de auxiliatura-->  
                      
                      
                       <div class="col-md-6 mb-3">
                           <label for="" class="col-form-label mr-2"><b>Nombre de Auxiliatura:</b></label>
                             <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Revise sus datos">
                                <span class="input-group-append">
                                   <button class="btn btn-dark text-white" type="button">C</button>
                                </span>
                                <p hidden> {{$convoca= $_GET['convoca']}}</p>
                                <p hidden>{{$convocatoria=App\Convocatoria::find($convoca)}}</p>
                                <select class="form-control js-example-basic-single " name="requerimientos" single="single">
                                  
                                  @foreach($convocatoria->requerimientos as $item)
                                <option class="text-dark" value="{{$item->id}}">{{ $item->nombre_auxiliatura }}</option>
                                  @endforeach
                              
                               </select>
                             </div>
                       </div>
                                   
                       <!----carrera--->
                       <div class="form-group-row mb-3"> 
                         <div class="col-md-6">
                             <label for="inputAddress" class="mr-3">Carrera:</label>
                             </div>
                               <select  class="custom-select form-control" id="toApply" required> 
                                 @foreach($carreras as $item)
                                   <option class="text-dark" value="carrera" {{ ($item->id == (Auth::user()->carrera_id)) ? 'selected' : '' }}>{{ $item->name }}</option>
                                 @endforeach	
                               </select>
                             </div>
                         </div>
                      </div>
              
                      <!-----documento subir curriculum-->
                      <div class="col-mb-6 mb-3">
                        <label for="exampleFormControlFile1" class="col-form-label mr-2"><b>Subir curriculum</b></label>
                        <input type="file" class="form-control-file" id="exmapleFormControlFile1">
                      </div>
                      
                  </div>    
                        <div class="form-actions text-center">
                            <a class="btn btn-outline-dark px-4" href="{{route('rotulo.segundo')}}">Atras</a>
                            <a href="javascript:save()"> <button  class="btn btn-outline-dark" type="submit" data-toggle="tooltip" data-placement="right" title="Presione el bot&oacute;n para generar el rótulo" >GENERAR ROTULO</button></a>

                         </div>
                </div>
               <!-- </form>-->
                <!---pies-->
                 <div class="card-footer">
                 </div>
              <!----fin tarjeta-->
         </div>
       </div>
    </div>
  </div>
  @include('admin.layouts.script')
 @endsection
