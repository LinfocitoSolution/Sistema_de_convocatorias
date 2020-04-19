<!DOCTYPE html>
@extends("layouts.plantilla")
<html>
<head>
  <meta charset="utf-8" />
  <title>NoRegistro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">    
  
  
  <style>
    .container{
      margin-top:30px;
    }
    .col{
        margin-right:50px;
    }
    .form-row{
      margin-top:30px;
    }
    .btn-primary{
      margin-left:10px;
    }
   /*.carousel-caption{
      position: absolute; 
      top:5px; 
    }*/
  </style>
</head>
<body>
    @section("cabecera")

    @endsection

    @section("infoGeneral")
    
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
    
        <div class="container">
         <form>
            <div class="form-row">
                <div class="col">
                   <div class="card text-white bg-dark" style="width: 30rem;">
                      <img src="{{ asset('imagenes/web.JPG') }}" class="card-img-top" alt="laboratorios" width="200" height="200">
                        <div class="card-body">
                          <h5 class="card-title">Convocatoria auxiliaturas de Laboratorios</h5>
                          <p class="card-text">Convocatoria para aquellos estudiantes que desean ser auxiliares en las diferentes areas, como ser el laboratorio de computo, laboratorio de desarrollo y laboratorio de mantenimiento.</p>
                          <a href="#" class="btn btn-success">Ver Convocatria</a>
                          <a href="{{url('postulante')}}" class="btn btn-primary">Registrate</a>
                        </div>
                    </div>
                </div>
                <div class="col">    
                    <div class="card text-white bg-dark" style="width: 30rem;">
                        <img src="{{ asset('imagenes/elem.JPG') }}" class="card-img-top" alt="laboratorios" width="200" height="200">
                            <div class="card-body">
                              <h5 class="card-title">Convocatoria auxiliaturas de docencia</h5>
                              <p class="card-text">Convocatoria para aquellos estudiantes que desean ser auxiliares de las materias de introduccion a la programacion, elementos  de programacion y estructuras de datos, teoria de grafos y computacion I.</p>
                              <a href="#" class="btn btn-success">Ver Convocatria</a>
                              <a href="{{url('postulante')}}" class="btn btn-primary">Registrate</a>
                            </div>
                    </div>                    
                 </div>
            </div> 
            <div class="form-row">
                <div class="col">
                   <div class="card text-white bg-dark" style="width: 30rem;">
                      <img src="{{ asset('imagenes/archivos.JPG') }}" class="card-img-top" alt="archivo" width="200" height="200">
                        <div class="card-body">
                          <h5 class="card-title">Convocatoria archivos</h5>
                          <p class="card-text">Convocatoria para aquellos estudiantes que desean trabajar en la secion de archivos.</p>
                          <a href="#" class="btn btn-success">Ver Convocatria</a>
                          <a href="{{url('postulante')}}" class="btn btn-primary">Registrate</a>
                        </div>
                    </div>
                </div>
                <div class="col">    
                    <div class="card text-white bg-dark" style="width: 30rem;">
                        <img src="{{ asset('imagenes/lenguajes.JPG') }}" class="card-img-top" alt="lengua" width="200" height="200">
                            <div class="card-body">
                              <h5 class="card-title">Convocatoria </h5>
                              <p class="card-text">Convocatoria para aquellos estudiantes que desean ser auxiliares en lago .</p>
                              <a href="#" class="btn btn-success">Ver Convocatria</a>
                              <a href="{{url('postulante')}}"  class="btn btn-primary">Registrate</a>
                            </div>
                    </div>                    
                 </div>
            </div>         
          </form>  
        </div>
        
    @endsection
</body>
    @section("pie")
    @endsection
</html>