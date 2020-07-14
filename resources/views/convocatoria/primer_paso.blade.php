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
                
                <form class="form-group" method="get" action="{{route('rotulo.segundo')}}" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group-row">
                      <!----Laboratorio---->
                        <div class="col-mb-5 mb-3">
                          <label class="input-group-text text-white" for="">Unidad a postular:</label>
                            <select  class="custom-select form-control" type="text" name="unidad" > 
                              @foreach($unidad as $uni)  
                                  <option class="text-dark" value="{{$uni->id}}">{{$uni->name}}</option>
                              @endforeach               
                              </select>
                        </div>
                        <div class="form-actions text-center">
                          
                          <a class="btn btn-outline-dark" href="{{url("home")}}">Atras</a>
                          <button class="btn btn-outline-dark" type="submit">Siguiente</button>
                          {{-- <a class="btn btn-outline-dark" href="{{route('rotulo.segundo', $uni)}}">Siguiente</a> --}}
                        </div> 
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