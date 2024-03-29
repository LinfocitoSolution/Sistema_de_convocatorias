@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  PRIMER_PASO
@endsection

@section("infoGeneral")

 <div class="container">
    <div class="row">
       <div class="col-lg-12">
          <div class="card mt-5"> 
              <!---cabeza--> 
               <div class="card-header text-white">
                   <h2>Seleccione Convocatoria a postular:</h2>
               </div>
              <!---cuerpo--->
              <div class="card-body">
                
                  
                    <form class="form-group" method="get" action="{{route("postulacion.form")}}" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group-row">
                        <!----Laboratorio---->
                          <div class="col-mb-5 mb-3">
                              {{-- <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Puede seleccionar uno o mas permisos"> --}}
                                <label class="input-group-text text-white" for="">Convocatoria a postular:</label>                         
                                <select  class="custom-select form-control" type="text" name="convoca" required > 
                                    {{-- {{$unidad= $_GET['unidad']}}   --}}
                                    @foreach($convocatoria as $convo)
                                    @if($convo->publicado=="si")
                                      @if($convo->unit_id == $uni && $convo->whereYear('gestion', '=', '2020'))
                                        <option class="text-dark" value="{{$convo->id}}">{{$convo->titulo_convocatoria}}</option>
                                      @endif
                                    @endif
                                    @endforeach
                                </select>
                              {{-- </div> --}}
                            </div>
                        </div>
                        <div class="form-actions text-center">
                            <a class="btn btn-outline-dark px-4" href="{{route('rotulo.primer')}}" data-toggle="tooltip" data-placement="left" title="Presione para volver al anterior paso">Atras</a>  
                            <button class="btn btn-outline-dark" type="submit" data-toggle="tooltip" data-placement="right" title="Presione para avanzar al formulario de rótulo">Siguiente</button>
                        </div> 
                    </form> 
              </div>  
              <!---fin cuerpo--->
               <!---pies-->
               <div class="card-footer">
                  
               </div>     
           </div>
        </div>
     </div>
  </div>
 @endsection 