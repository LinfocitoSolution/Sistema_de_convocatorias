{{-- FORMATO UNICAMENTE PARA LAS CONVOCATORIAS  --}}
<html>

        <head>
            <title>Convocatoria - @yield('title')</title>

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
           
        </head>

        <body>
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

            <div class="container">
                  @yield('content')
            </div>
           
        </body>
        @extends('layouts.footer')
</html> 