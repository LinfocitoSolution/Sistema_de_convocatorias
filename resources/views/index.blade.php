<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="x-ua-compatible" content="ie=edge">

   <title> INDEX </title>

   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- Styles -->
   <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/home/clases.css')}}" rel="stylesheet">
   
   @if(session()->has('message'))
    <div class="alert alert-success mb-0">
        {{ session()->get('message') }}
    </div>
@endif
</head> 
<body>
 <div class="cabeza">
   <div class="container"> 
     <div class="jumbotron jumbotron-fluid mb-0 pt-4" style="height: 300px;">
              <div class="h4 text-white text-center mt-0">CONVOCATORIAS AUXILIARES</div>
              
              <div class="h6 text-white text-center">FACULTAD DE CIENCIAS Y TECNOLOGIA</div>
          <div class="row justify-content-center responsive">
                   <div class="col-4 col-md-2">
                      <img class="logoUmss float-left  p-0 mt-4 img-responsive" width="89" height="120" src="{{asset('../imagenes/umss1.png')}} " alt="umss2">
                   </div>
                  <div class="col-5 col-md-8"> 
                  <!--Carrusel-->  
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                       <ol class="carousel-indicators">
                         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                         <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                       </ol>
                       <div class="carousel-inner">
                           <div class="carousel-item active">
                              <img src="{{ asset('/imagenes/principalfacu.jpg') }}"  class="d-block w-100" alt="web" width="400" height="210">
                              <div class="carousel-caption" >
                                 <div class="text-white pb-2">
                                    <h4>Facultad de ciencias y tecnología</h4>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                                <img src="{{ asset('/imagenes/sistemas.jpg') }}" class="d-block w-100" alt="elem" width="400" height="210">
                              <div class="carousel-caption">
                                 <div class="text-white pb-4">
                                    <h4>Departamento de Sistemas e Informática</h4>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                               <img src="{{ asset('/imagenes/electronica.jpg') }}" class="d-block w-100" alt="aulalaboratorios" width="400" height="210">
                              <div class="carousel-caption">
                                 <div class="text-white pb-3">
                                   <h4>Departamento de Electrónica</h4>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="sr-only">Next</span>
                          </a>
                     </div>
                    <!--fin carrusel-->  
                </div> 
                <div class="col-4 col-md-2">
                   <img  class="logoCarrera float-right ml-0 p-0 mt-4  img-responsive" width="89" height="100" src="{{asset('../imagenes/facultadtec.png')}}" alt="carrera"> 
                </div>
          </div>
      </div>
         <!--fin de container--> 
    </div>     
 </div> 
 <!-- navbar -->
 <nav class="navbar sticky-top navbar-expand-lg py-0">
   <a class="navbar-brand  text-white" href="{{url('/')}}" tabindex="-1" >Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
         <div class="dropdown" ><button class="btn btn-outline-dark text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Unidades</button>
          <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
            @foreach($unidade as $uni)
             <a class="dropdown-item" tabindex="3"  href="/?unidad={{$uni->id}}">{{$uni->name}}</a><br>
              @endforeach
           </div>
        </div>
       </li>
       <li class="nav-item">
            <a href="/"> <button  class="btn btn-outline-dark text-white ml-2" >Todos</button> </a>
       </li>
      </ul>
       <!----si es invitado--->
       @if (Auth::guest())
        <form class="form-inline float-xs-right">
          <a class="btn btn-outline-dark  text-white m-2 my-sm-2" type="submit" href="{{url('login')}}">Iniciar Sesión</a>
          <a class="btn btn-outline-dark  text-white m-2 my-sm-2" type="submit" href="{{url('register')}}">Regístrate</a>
        </form>
        @else 
       <a class="text-white m-2 my-sm-2">{{Auth::user()->name  }} {{Auth::user()->lastname}}</a>
        
          
          @if(Auth::user()->roles->first()->name=='Postulante')
              @if (!App\Curriculum::where('user_id', '=', Auth::user()->id)->exists())
                  <a class="btn btn-outline-dark  text-white m-2 my-sm-2" type="submit" href="{{route('rotulo.primer')}}">Formulario de Postulacion</a>
              @else
              <a class="btn btn-outline-dark  text-white m-2 my-sm-2" type="submit" href="{{route('descripcion.desc',ucfirst(Auth::user()->id))}}">Estado de Entrega de Documentos:</a> 
              @endif
              <p hidden>{{$a=App\Postulante_submerito::where('user_id',Auth::user()->id)->first()}}</p>
           @if(isset($a)) 
           @if($a->publicado=="si")
            <a class="btn btn-outline-dark  text-white m-2 my-sm-2" type="submit" href="{{route('calificacion.merito',ucfirst(Auth::user()->id))}}">Notas:</a>
           @endif
           @endif

          @else
          
          <a class="btn btn-outline-dark  text-white m-2 my-sm-2" type="submit" href="{{url('administrador')}}">Panel de Trabajo</a>
          @endif
          <form class="form-inline float-xs-right">
            <div class="btn-group">
              <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">{{Auth::user()->roles->first()->name}}</button>
                <div class="dropdown-menu">
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item bg-dark text-white" tabindex="0" href="{{ route('postulante.show',ucfirst(Auth::user()->id))}}">
                      <i class="fas fa-user mr-2"></i>Perfil
                    </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item bg-dark text-white" href="{{url('logout')}}">
                      <i class="fas fa-times-circle mr-2"></i>Cerrar Sesion
                    </a>
           </form>
           @endif
    </div>
 </nav>
 <!--fin navbar-->   
 <!--contenido medio-->

 <!--ERRORES-->
     <!-- if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          foreach ($errors->all() as $error)
            <li>{ $error }}</li>
          endforeach
        </ul>
      </div>
      endif--->
    
    
  <!--carrusel-->

   <!--fin carrusel--> 

   <!--convocatorias ofertadas-->
 <div class="convocatoria">
    <div class="container mt-4 mb-3">
     <div class="row justify-content-around">
        @foreach ($convocatorias as $convocatoria)
          @if($convocatoria->publicado=="si") 
          <div class="col-lg-5">
                <div class="card mb-4">
                   <div class="card-header">
                     <h4 class="card-title"><small>{{$convocatoria->titulo_convocatoria}}</small></h4>
                     <h6>{{App\Unidad::find($convocatoria->unit_id)->name}}</h6>
                   </div> 
                        <div class="card-body" style="height: 150px;overflow-y:scroll">
                         
                           <table class="table table-bordered table-striped table-sm" >
                             <thead>
                               <tr>
                                <th>Auxiliaturas</th>
                                <!-- <th>Evento</th>
                                 <th>Fecha Inicial</th>--> 
                               </tr>
                             </thead>
                             <tbody>
                             
                                
                                 <td>
                                  @foreach($convocatoria->requerimientos as $convo)
                                  - {{$convo->nombre_auxiliatura}}<br>
                                  @endforeach
                                </td>
                              
                              </tbody>
                           </table>         
                              {{-- <form class="form-horizontal" action="/call/{{$convocatoria->pdf_file}" method="GET"> --}}
                             {{-- <a href="call/{{$convocatoria->pdf_file}}" target="_blank" class="btn btn-outline-dark rounded-pill  btn-block" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Presiona el botón para ver la convocatoria">Ver Convocatoria</a>
                              --}}
                          <!--<a href="{{route('generar',$convocatoria)}}" class="btn btn-outline-dark rounded-pill  btn-block" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Presiona el botón para ver la convocatoria">Ver Convocatoria</a>-->
                          
                           {{-- @if(Auth::check() && Auth::user()->roles->first()->name=='Postulante')
                             <a href="{{route('postulacion.form')}}" target="_blank" class="btn btn-outline-dark rounded-pill btn-block" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Presiona el botón para ver la convocatoria">Postularse</a>
                           @endif
                           --}}
                        </div>
                       
                        
                          @if ($convocatoria->tipo_convocatoria == "convocatoria de laboratorios")
                        <a href="{{route('generarConv',$convocatoria)}}" class="btn btn-outline-dark  " data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Presiona el botón para ver la convocatoria">Ver Convocatoria</a>                              
                    @else
                        <a href="{{route('generarConvDoc',$convocatoria)}}" class="btn btn-outline-dark  " data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Presiona el botón para ver la convocatoria">Ver Convocatoria</a> 
                    @endif
                        

                </div>
            </div>  
            @endif
        @endforeach
      </div>
    </div>
 </div>
   <!--fin de convocatorias ofertadas-->     
   
   
    
  <!--inicio de pie pagina--> 
   
  <div class="footer">
    <div class="container">
      <div class="row">
          <div class="col-xs-5 col-md-6 text-left">
              <h4 class="text-white">CONTACTO:</h4>
              <h6 class="text-white">
              Dirección: Avenida 6 de agosto. Esquina moxos numero 542.<br>
              Teléfono: 4795260.<br>
              Celular: 75978930.<br>
              Correo: linficitossolution@gmail.com
              </h6>
          </div>

          <div class="col-xs-11 col-md-6 text-right">
              <h5 class="text-white">ENCUENTRANOS EN LAS REDES</h5>
              <div class="redes-footer">
                <a href="http://websis.umss.edu.bo/"><img src="{{asset('imagenes/websis.jpg')}}" width="60" height="60"></a>
                <a href="http://www.cs.umss.edu.bo/"><img src="{{asset('imagenes/logoInformaticaSistemas.png')}}" width="60" height="60"></a>
                <a href="http://www.umss.edu.bo/"><img src="{{asset('imagenes/umss1.png')}}" width="40" height="60"></a>
              </div>
              <hr>
              <div class="col-md-12 text-right">
              <p class="text-white medium">LinfocitoSolution @2020.<br> Todos los derechos reservados.</p>
              </div> 
          </div>
       </div>
    </div>
  </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('jquery/jquery-3.4.1.slim.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script>
      $(function () {
       $('[data-toggle="popover"]').popover({
          placement:"right",
          trigger:"hover"
       })
      })
    </script>
    <script>
      $(function () {
      $('[data-toggle="tooltip"]').tooltip()
       })
    </script>  {{--scripts copiados de admin/layouts/scripts--}}
    <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('dist/js/adminlte.min.js')}}"></script>
    <!-- Select2 -->
    <link href="{{URL::asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />
    <script src="{{URL::asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script>
 </body>
</html>