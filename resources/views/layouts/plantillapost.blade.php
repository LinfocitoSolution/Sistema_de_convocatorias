<!doctype html>
<html>
<head>

<title> Registro - Postulante </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="contenedor">
   
     @yield("cabecera")
   

   
    <div class="login">
     @yield("infoGeneral")
     </div>

 
   
</div>


  <script src="{{aseet('js/bootstrap.min.js')}}"  type="text/javascrpt"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script><script src="{{asset('jquery/jquery-3.4.1.slim.min.js')}}" type="text/javascript"></script>
</body>
</html>