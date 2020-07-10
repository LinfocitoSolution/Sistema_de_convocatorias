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
                <form class="form-group" method="get" action={{route("postulacion.form")}} >
                    <input type="hidden" name="_token" value="{ csrf_token() }}">
                    
                  <div class="form-group-row">
                    <!----Laboratorio---->
                      <div class="col-mb-5 mb-3">
                         <label class="input-group-text text-white" for="">Convocatoria a postular:</label>
                   
                         <select  class="custom-select form-control" type="text" name="convoca" > 
                           @foreach($convocatoria as $convo)  
                           
                          <option class="text-dark" value="{{$convo->id}}">{{$convo->titulo_convocatoria}}</option>
                             
                           @endforeach
                           </select>
                      </div>
                  </div>
                   <div class="form-actions text-center">
                     
                    <a class="btn btn-outline-dark px-4" href="{{route('rotulo.primer')}}">Atras</a>  
                    <button class="btn btn-outline-dark" type="submit">siguiente</button>
                      
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