<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <div class="jumbotron jumbotron-fluid mb-0 pt-4" style="height: 140px;">
    <div class="container">
      <div class="media">
        <img  class="logoUmss float-left align-center mt-0" width="110" height="100" src="{{asset('../imagenes/umss.png')}} " 
           alt="umss2">
          <div class="media-body" > 
             <div class="h5 text-white text-center mt-0">CONVOCATORIAS AUXILIARES</div>
             <div class="h5 text-white text-center">UNIVERSIDAD MAYOR DE SAN SIMÓN</div>
          </div>
          <img  class="logoCarrera float-right align-center p-0" width="100" height="100" src="{{asset('../imagenes/logoInformaticaSistemas.png')}}" 
           alt="carrera"> 
        </div>     
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
      <li class="nav-item" tabindex="0" data-toggle="tooltip" data-trigger="hover" title="Este boton no esta disponible">
        <a class="nav-link text-white"disabled href="#">Calendario</a>
      </li>
      <li class="nav-item" tabindex="0" data-toggle="tooltip" title="Este boton no esta disponible">
        <a class="nav-link text-white" disabled href="#">Información</a>
      </li>
     <li class="nav-item dropdown" tabindex="0" data-toggle="tooltip" data-trigger="hover" title="Este boton no esta disponible">
        <a class="nav-link dropdown-toggle text-white" disabled href="#"  id="nabarDropdown" tabindex="-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Malla Curricular
        </a>
        <div class="dropdown-menu hover" >
          <a class="dropdown-item" href="#">Sistemas</a>
          <a class="dropdown-item" href="#">Informática</a>
          <a class="dropdown-item" href="#">Industrial</a>
        </div>  
      </li>
    </ul>
    <!----si es invitado--->
    @if (Auth::guest())
      <form class="form-inline float-xs-right">
         <a class="btn btn-outline-dark  text-white m-2 my-sm-2" data-toggle="tooltip" data-placement="top" title="Si ya te registraste pudes iniciar sesi&oacute;n"type="submit" href="{{url('login')}}">Iniciar Sesión</a>
         <a class="btn btn-outline-dark  text-white m-2 my-sm-2" data-toggle="tooltip" data-placement="top" title="Reg&iacute;strate si no estas logueado" type="submit" href="{{url('register')}}">Regístrate</a>
        </form>
     <!---sino si es postulante-->   
    @elseif(Auth::user()->roles->first()->name=='Postulante')
    <form class="form-inline float-xs-right">
      <a class="btn btn-outline-primary  text-white m-2 my-sm-2" type="submit" href="{{route('postulacion.form')}}">postularse</a>
      <a class="btn btn-outline-primary text-white m-2 my-sm-2" type="submit" href="{{url('logout')}}">Cerrar Sesión</a>
      </form>
    @else 
    <form class="form-inline float-xs-right">
    <a class="btn btn-outline-primary  text-white m-2 my-sm-2" type="submit" href="{{url('administrador')}}">Administrar</a>
    <a class="btn btn-outline-primary text-white m-2 my-sm-2" type="submit" href="{{url('logout')}}">Cerrar Sesión</a>
    </form>
    @endif

  </div>
</nav>
 <!--fin navbar-->   
 <!--contenido medio-->

 <!--ERRORES-->
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
    
    
  <!--carrusel-->      
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('/imagenes/tecno.jpg') }}"  class="d-block w-100" alt="web" width="1000" height="300">
                <div class="carousel-caption" >
                  <div class="text-white pb-4">
                    <h2>Facultad de ciencias y tecnología</h2>
                  </div>
                </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/imagenes/sistemas.jpg') }}" class="d-block w-100" alt="elem" width="1000" height="300">
            <div class="carousel-caption">
              <div class="text-white pb-4">
                  <h2>Departamento de Sistemas e Informática</h2>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/imagenes/aula.jpg') }}" class="d-block w-100" alt="aulalaboratorios" width="1000" height="300">
              <div class="carousel-caption">
                <div class="text-white pb-4">
                  <h1>Laboratorios</h1>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/imagenes/edificio.jpg') }}" class="d-block w-100" alt="prog" width="1000" height="300">
              <div class="carousel-caption" >
                  <div class="text-white pb-4">
                    <h2>Edificio Multiacadémico</h2>
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

   <!--convocatorias ofertadas-->
<div class="convocatoria">
  <div class="container mt-5 mb-5">
    <div class="row justify-content-around">
        @foreach ($convocatorias as $convocatoria)
           <div class="col-lg-6">
                <div class="card text-white bg-dark my-3 ml-2 mr-3" style="width: 28rem;">
                    <img src="{{ asset('/imagenes/web.jpg') }}" class="card-img-top" alt="laboratorios" width="200" height="200">
                        <div class="card-body">
                          <h5 class="card-title">{{$convocatoria->titulo_convocatoria}}</h5>
                            <p class="card-text">{{$convocatoria->descripcion}}</p>
                            {{-- <form class="form-horizontal" action="/call/{{$convocatoria->pdf_file}" method="GET"> --}}
                          <a href="call/{{$convocatoria->pdf_file}}" target="_blank" class="btn btn-success rounded-pill active btn-block" >Ver Convocatoria</a>
                        </div>
                </div>
              </div>  
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
                <a href="http://websis.umss.edu.bo/"><img src="{{asset('imagenes/websis.JPG')}}" width="60" height="60"></a>
                <a href="http://www.cs.umss.edu.bo/"><img src="{{asset('imagenes/cs.JPG')}}" width="60" height="60"></a>
                <a href="http://www.umss.edu.bo/"><img src="{{asset('imagenes/umss.png')}}" width="60" height="60"></a>
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
      $('[data-toggle="tooltip"]').tooltip()
       })
    </script>  
</body>
</html>