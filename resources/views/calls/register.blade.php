<!DOCTYPE html>
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
    <form name="form1" method="get" action="app/Http/Controllers/registrarConvocatoriaController.php">
        <div class="continer"> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Registro</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Historial</a>
                        <a class="nav-item nav-link" href="#">Cerrar Sesión</a>
                       {{-- Aquí va la imagen del usuario
                        <a class="navbar-brand" href="#"> <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""></a>
                         --}}
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">

            <div class="form-group">
                    <label for="">Descripción</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                    <label for="">Requisitos</label>
                    <textarea class="form-control" name="requirements" rows="3"></textarea>
                    <label for="">Documentos a presentar</label>
                    <textarea class="form-control" name="docs" rows="3"></textarea>
                    <label for="">Formato de entrega</label>
                    <textarea class="form-control" name="format" rows="3"></textarea>    
                   {{-- 
                    <input onclick="salvar(description.value)" type="button" name="Submit" value="Descargar" id="Submit" />                         
                     --}}
            </div>

        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    </body>
</html>