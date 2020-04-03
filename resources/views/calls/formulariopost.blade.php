<!DOCTYPE html>
@extends("layouts.plantilla")
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro</title>
        
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
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
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('imagenes/aula.JPG') }}" class="d-block w-100" alt="aula">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/web.JPG') }}" class="d-block w-100" alt="web">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/elem.JPG') }}" class="d-block w-100" alt="elementos">
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
    @endsection
    </body>
    @section("pie")
    @endsection
</html>