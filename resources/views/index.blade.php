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
   
   <!-- Scripts 
     <script>
       window.Laravel = <?php echo json_encode([
       'csrfToken' => csrf_token()
       ]);?>
     </script>-->
</head> 
<body>
<!-- navbar -->
 <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand  text-white" href="{{url('index')}}" tabindex="-1" >Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('convocatorias') }}">Convocatorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('calendario') }}">Calendario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#">Informacion</a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#"  id="nabarDropdown" tabindex="-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Malla Curricular
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">Sistemas</a>
          <a class="dropdown-item" href="#">Informatica</a>
          <a class="dropdown-item" href="#">Industrial</a>
        </div>  
      </li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
         <a class="btn btn-outline-success  text-white my-2 my-sm-2" type="submit" href="{{url('login')}}">Iniciar Sesion</a>
         <a class="btn btn-outline-warning  text-white my-2 my-sm-2" type="submit" href="{{url('postulante/create')}}">Registrate</a>
        </form>
  </div>
</nav>
 <!--fin navbar-->   
 <!--contenido medio-->
    
    
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
            <img src="{{ asset('imagenes/tecno.JPG') }}"  class="d-block w-100" alt="web" width="1000" height="600">
                <div class="carousel-caption" >
                  <div class="text-white d-none d-md-block">
                    <h1>Facultad de ciencias y tecnologia</h1>
                  </div>
                </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('imagenes/sistemas.JPG') }}" class="d-block w-100" alt="elem" width="1000" height="600">
            <div class="carousel-caption">
              <div class="text-white">
                  <h1>Departamento de sistemas e informatica</h1>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('imagenes/aula.JPG') }}" class="d-block w-100" alt="aulalaboratorios" width="1000" height="600">
              <div class="carousel-caption">
                <div class="text-white">
                  <h1>Laboratorios</h1>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('imagenes/edificio.JPG') }}" class="d-block w-100" alt="prog" width="1000" height="600">
              <div class="carousel-caption" >
                  <div class="text-white d-none d-md-block">
                    <h1>Edificio Multiacademico-Archivos</h1>
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
{{--    
   @php
       //use App\Http\Controllers\CallController;
       use App\Http\Controllers\CallController;
       CallController::mostrar()
   @endphp --}}
  
   
   <div class="row">
    @foreach ($convocatorias as $convocatoria)
      <div class="col-sm">
          <div class="card" style="width: 18rem;">     
              <div class="col-sm-1 col-md-6">
                <div class="card text-white bg-dark" style="width: 30rem;">
                  <img src="{{ asset('imagenes/web.JPG') }}" class="card-img-top" alt="laboratorios" width="200" height="200">
                    <div class="card-body">
                      <h5 class="card-title">{{$convocatoria->titulo_convocatoria}}</h5>
                      <p class="card-text">{{$convocatoria->descripcion}}</p>
                      <a href="#" class="btn btn-success rounded-pill active btn-block">Ver Convocatria</a>
                    </div>
                </div>
             </div>
          </div>
      </div>
    @endforeach
  </div>
   <!--fin de convocatorias ofertadas-->     
     
    
  <!--inicio de pie pagina--> 
   
  <div class="footer">
    <div class="container">
      <div class="row">
          <div class="col-xs-5 col-md-6 text-left text-warning">
              <h4 class="text-warning">CONTACTO:</h4>
              <h6 class="text-white">
              Direccion: Avenida 6 de agosto. Esquina moxos numero 542.<br>
              Teléfono: 4795260.<br>
              Celular: 75978930.<br>
              Correo: linficitossolution@gmail.com
              </h6>
          </div>

          <div class="col-xs-11 col-md-6 text-right">
              <h5 class="text-success">ENCUENTRANOS EN LAS REDES</h5>
              <div class="redes-footer">
                <a href="http://websis.umss.edu.bo/"><img src="{{asset('imagenes/websis.JPG')}}" width="60" height="60"></a>
                <a href="http://www.cs.umss.edu.bo/"><img src="{{asset('imagenes/cs.JPG')}}" width="60" height="60"></a>
                <a href="http://www.umss.edu.bo/"><img src="{{asset('imagenes/umss.png')}}" width="60" height="60"></a>
              </div>
          </div>
       </div>
       <div class="row">
           <div class="col-md-12 text-right">
              <p class="text-white medium">LinfocitoSolution @2020.<br> Todos los derechos reservados.</p>
           </div>  
      </div>
    </div>

  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('jquery/jquery-3.4.1.slim.min.js')}}" type="text/javascript"></script>

</body>
</html>