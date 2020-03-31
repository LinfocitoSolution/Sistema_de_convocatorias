<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
    <body>

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
                    <label for="descriptionFormTextarea">Descripción</label>
                    <textarea class="form-control" id="descriptionFormTextarea" rows="3"></textarea>
                    <label for="requirementsFormTextarea">Requisitos</label>
                    <textarea class="form-control" id="requirementsFormTextarea" rows="3"></textarea>
                    <label for="docsFormTextarea">Documentos a presentar</label>
                    <textarea class="form-control" id="docsFormTextarea" rows="3"></textarea>
                    <label for="formatFormTextarea">Formato de entrega</label>
                    <textarea class="form-control" id="formatFormTextarea" rows="3"></textarea>
                    
            </div>
        </div>

    </body>
</html>