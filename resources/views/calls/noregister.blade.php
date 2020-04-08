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
  </style>
</head>
<body>
    @section("cabecera")

    @endsection

    @section("infoGeneral")
    
        <img class="img-fluid" src="{{ asset('imagenes/aula.JPG') }}" alt="foto" width="1345" height="400">
    
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
            </div>
          </form>  
        </div>
        
    @endsection
</body>
    @section("pie")
    @endsection
</html>