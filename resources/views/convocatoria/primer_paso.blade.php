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
                @foreach($unidad as $uni)  
                <form class="form-group" method="get" action="{{route('rotulo.segundo', $uni)}}" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group-row">
                      <!----Laboratorio---->
                        <div class="col-mb-5 mb-3">
                          <label class="input-group-text text-white" for="">Unidad a postular:</label>
                            <select  class="custom-select form-control" type="text" name="unidad" > 
                              
                                  <option class="text-dark" value="{{$uni->id}}">{{$uni->name}}</option>
                              
                              </select>
                        </div>
                    </div>
                      <div class="form-actions text-center">
                        <button class="btn btn-outline-dark" type="submit">Siguiente</button>
                        <!--<a class="btn btn-outline-dark" href="{{route('rotulo.segundo', $uni)}}">Siguientes</a>-->
                      </div> 
                  </form> 
                @endforeach
              </div> 
                  <!---pies-->
                 <div class="card-footer">
                  
                </div>
           </div>
        </div>
     </div>
  </div>
 @endsection 