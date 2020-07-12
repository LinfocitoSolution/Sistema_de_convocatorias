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
                
              @foreach($convocatoria as $convo)
                <form class="form-group" method="get" action={{route("postulacion.form",$convo)}} >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                  <div class="form-group-row">
                    <!----Laboratorio---->
                      <div class="col-mb-5 mb-3">
                          {{-- <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Puede seleccionar uno o mas permisos"> --}}
                            <label class="input-group-text text-white" for="">Convocatoria a postular:</label>                         
                            <select  class="custom-select form-control" type="text" name="convoca" > 
                                {{$unidad= $_GET['unidad']}}  
                                  @if($convo->unit_id==$unidad && $convo->whereYear('gestion', '=', '2020'))
                                    <option class="text-dark" value="{{$convo->id}}">{{$convo->titulo_convocatoria}}</option>
                                  @endif
                            </select>
                          {{-- </div> --}}
                      </div>
                  </div>
                   <div class="form-actions text-center">
                      <a class="btn btn-outline-dark px-4" href="{{route('rotulo.primer')}}">Atras</a>  
                      <button class="btn btn-outline-dark" type="submit">Siguiente</button>
                   </div> 
                </form> 
              @endforeach
              
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