<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Noregistro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">        
    </head>
    <body>

<nav class="navbar  navbar-light bg-light">
  <a class="navbar-brand"></a>
  <form class="form-inline">
    <button class="btn btn-outline-primary mr-sm-2" type="menu" >Menu</button>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Iniciar Sesion</button>
  </form>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
     <img src="..." class="img-fluid" alt="Responsive image">
    <h1 class="display-4">CONVOCATORIAS AUXILIARES</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
<div class="container">
            <div class="form-group">
                    <label for="descriptionFormTextarea">Descripción</label>
                    <textarea class="form-control" id="descriptionFormTextarea" rows="3"></textarea>
                    <label for="requirementsFormTextarea">Documento</label>
                    <textarea class="form-control" id="requirementsFormTextarea" rows="3"></textarea>
                   
                    
            </div>
        </div>

    </body>
</html>