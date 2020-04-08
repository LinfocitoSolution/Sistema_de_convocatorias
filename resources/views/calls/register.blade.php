<!DOCTYPE html>
@extends("layouts.plantilla")
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro</title>
        
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <script> 
            function salvar(t){ 
                        window.location='data:application/octet-stream;base64,'+btoa(t); 
            } 
        </script> 
    </head>
    <body>
    @section("cabecera")

    @endsection

   @section("infoGeneral")
    <form name="form1" method="get" action="app/Http/Controllers/registrarConvocatoriaController.php">
       

        <div class="container">
            <div class="form-group">
                    <label for="descriptionFormTextarea">Descripción</label>
                    <textarea class="form-control" id="descriptionFormTextarea" rows="3"></textarea>
                    <input onclick="salvar(descriptionFormTextarea.value)" type="button" name="Submit" value="Descargar" id="Submit" /> 
                    <br>
                    <label for="requirementsFormTextarea">Requisitos</label>
                    <textarea class="form-control" id="requirementsFormTextarea" rows="3"></textarea>
                    <label for="docsFormTextarea">Documentos a presentar</label>
                    <textarea class="form-control" id="docsFormTextarea" rows="3"></textarea>
                    <label for="formatFormTextarea">Formato de entrega</label>
                    <textarea class="form-control" id="formatFormTextarea" rows="3"></textarea>
                    
            </div>

        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    @endsection
    </body>
    @section("pie")
    @endsection
</html>