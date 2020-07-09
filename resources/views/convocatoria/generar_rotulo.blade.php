
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
            <!-- <form class="form-group" method="get" action={url("/rotulo")}} >
               <input type="hidden" name="_token" value="{ csrf_token() }}">--->
                 <!--nombre--->
                <div class="form-row">
                 
                    <div class="col-md-6 mb-3">
                        <label for=""class="mr-2">Nombre:</label>
                        {{-- <input type="text" class="text" id="name" placeholder="Ingrese su nombre"> --}}
                         <input type="text" class="text" id="name" value="{{ ucfirst(Auth::user()->name)}}">
                    </div>
                
                      <!-----apellido-->  
               
                    <div class="col-md-6 mb-3">
                        <label for="inputPassword4" class="mr-2">Apellido:</label>
                        {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                        <input type="text" class="text" id="lastname" value="{{ ucfirst(Auth::user()->lastname)}}">
                    </div>
              
                      <!-----Direccion-->  
               
                     <div class="col-md-6 mb-3">
                         <label for="inputPassword4" class="mr-2">Direccion:</label>
                         {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                         <input type="text" class="text" id="direccion" value="">
                      </div>
                
                      <!----telefonos-->  
               
                      <div class="col-md-6 mb-3">
                          <label for="inputPassword4" class="mr-2">Telefonos:</label>
                          {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                          <input type="text" class="text" id="telefono" value="">
                      </div>
             
                      <!-----e-mail-->  
                
                       <div class="col-md-6 mb-3">
                            <label for="inputPassword4" class="mr-2">E-mail:</label>
                            {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                            <input type="text" class="" id="email" value="">
                       </div>
             
                      <!-----codigp de item-->  
               
                       <div class="col-md-6 mb-3">
                           <label for="inputPassword4" class="mr-2">Codigo de item:</label>
                            {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                           <input type="text" class="text" id="lastname" value="">
                      </div>
             
              
                     <!----carrera--->
            
                      <!-----documento subir curriculum-->
                      <div class="col-mb-6 mb-3">
                        <label for="exampleFormControlFile1">Subir curriculum</label>
                        <input type="file" class="form-control-file" id="exmapleFormControlFile1">
                      </div>
                      
                  </div>    
                      
                        
                        <div class="form-actions text-center">
                            <a class="btn btn-outline-dark px-4" href="{{route('rotulo.segundo')}}">Atras</a>
                            
                            <button class="btn btn-outline-dark" data-toggle="tooltip" data-placement="right" title="Presione el bot&oacute;n para generar el rótulo"onclick="test();">Generar rótulo</button>
                             <a href="javascript:getPdf()">test</a>
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
 @endsection
