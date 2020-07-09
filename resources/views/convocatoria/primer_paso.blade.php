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
                   <h2>Seleccione Unidad a Postular:</h2>
               </div>
              <!---cuerpo--->
              <div class="card-body">
                <form class="form-group" method="get" action={{url("/rotulo")}} >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group-row">
                    <!----Laboratorio---->
                      <div class="col-mb-5 mb-3">
                         <label class="input-group-text text-white" for="">Unidad a postular:</label>
                   
                           <select  class="custom-select form-control" id="toApply" required> 
                              <option selected value="1">Dep. de Sistemas e Informatica</option>
                              <option value="2">Dep. de Informatica</option>
                              <option value="3">Dep. de Mecanica</option>
                           </select>
                      </div>
                   </div>
                    <div class="form-actions text-center">
                      
                      <a class="btn btn-outline-dark" href="{{route('rotulo.segundo')}}">Siguiente</a>
                      
                    </div> 
                </form> 
              </div> 
                  <!---pies-->
                 <div class="card-footer">
                  
                </div>
           </div>
        </div>
     </div>
  </div>
 @endsection 