<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="x-ua-compatible" content="ie=edge">

   <title> INDEX </title>

   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- Styles -->
   <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/plantillaIndex/clases.css')}}" rel="stylesheet">
   
   <!-- Scripts -->
     <script>
       window.Laravel = <?php echo json_encode([
       'csrfToken' => csrf_token(),
       ]); ?>
     </script>
    
</head>
<body>
<div id="contenedor">
   
    
     @include("layouts.partials.navbar")
   

   <section>
    <div class="login">
     @yield("infoGeneral")
     </div>
   </section>
 
   
     
     @include("layouts.footer")
   
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{asset('jquery/jquery-3.4.1.slim.min.js')}}" type="text/javascript"></script>
@yield('scripts')
</body>
</html>