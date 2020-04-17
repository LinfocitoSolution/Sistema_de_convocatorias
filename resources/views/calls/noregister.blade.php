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
    .carousel-caption{
      position: absolute; 
      top:5px; 
    }
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
      <img src="{{ asset('imagenes/aula.JPG') }}"  class="d-block w-100" alt="web" width="1000" height="600">
          <div class="carousel-caption" >
            <div class="text-white">
             <h1>CONVOCATORIA A AUXILIATURAS EN LABORATORIO DE COMPUTACION,<br>
                                DE MANTENIMIENTO Y DESARROLLO</h1>
            </div>
           </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/elem.JPG') }}" class="d-block w-100" alt="elem" width="1000" height="600">
      <div class="carousel-caption">
         <div class="text-dark">
             <h1>CONVOCATORIA A AUXILIATURAS DE DOCENCIA</h1>
           </div>
         </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/archivos.JPG') }}" class="d-block w-100" alt="lenguaje" width="1000" height="600">
        <div class="carousel-caption">
           <div class="text-dark">
             <h1>CONVOCATORIA A LA SECCION DE ARCHIVOS</h1>
           </div>
        </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/programacion.JPG') }}" class="d-block w-100" alt="prog" width="1000" height="600">
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
                    <label for="descriptionFormTextarea" >Descripción</label>
                    <textarea class="form-control" id="descriptionFormTextarea" rows="3" ></textarea>
                </div>
                <div class="col">    
                    <label for="requirementsFormTextarea">Documento</label>
                    <textarea class="form-control" id="requirementsFormTextarea" rows="3"></textarea>                    
            </div>
          </form>  
        </div>
        
    @endsection
</body>
    @section("pie")
    @endsection
</html>