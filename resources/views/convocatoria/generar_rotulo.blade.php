
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
          <div class="card-body" id="datos">
            <form class="form-group" method="get" action={{url("/rotulo")}} >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <!--nombre--->
               <div class="form-group-row mb-3">
                 <div class="form-group">
                   <div class="col-md-6">
                    <label for=""class="mr-2">Nombre:</label>
                    {{-- <input type="text" class="text" id="name" placeholder="Ingrese su nombre"> --}}
                    <input type="text" class="text" id="name" value="{{ ucfirst(Auth::user()->name)}}">
                   </div>
                  </div>
              <!-----apellido-->  
               <div class="form-group-row mb-3">
                 <div class="col-md-6">
                    <label for="inputPassword4" class="mr-2">Apellido:</label>
                    {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                    <input type="text" class="text" id="lastname" value="{{ ucfirst(Auth::user()->lastname)}}">
                 </div>
               </div>
              <!----carrera--->
              <div class="form-group-row mb-3"> 
                <div class="col-md-6">
                    <label for="inputAddress" class="mr-3">Carrera:</label>
                  {{--<div class="input-group-prepend"> --}}                   
                    {{-- <input type="text" class="text" id="career" placeholder="Ingrese su carrera"> --}}
                     <input type="text" class="text" id="career" value="{{ ucfirst(Auth::user()->career)}}">
                   {{--</div>--}}
                </div>
             </div>
             <!---convocatoria--->
             
                <div class="input-group-prepend">
                  <div class="col-mb-5 mb-3">
                    <label class="input-group-text text-white" for="">Convocatoria a postular:</label>
                    </div>
                      <select  class="custom-select form-control" id="toApply" required> 
                        <option selected value="1">Laboratorio de cómputo</option>
                        <option value="2">Auxiliatura</option>
                        <option value="3">Laboratorio de redes</option>
                      </select>
                    </div>
                 </div>
                </div>
               <div class="form-actions text-center">
                  <button class="btn btn-outline-dark mb-4" data-toggle="tooltip" data-placement="right" title="Presione el bot&oacute;n para generar el rótulo"onclick="test();">Generar rótulo</button>
                  <a href="javascript:getPdf()">test</a>
               </div>
           
          </form>
        </div>  
            <!---pies-->
             <div class="card-footer">
                  
             </div>
        
        <!----fin tarjeta-->
      </div>
    </div>
    </div>
  </div>
 @endsection
