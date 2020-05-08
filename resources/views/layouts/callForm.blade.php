{{-- FORMATO UNICAMENTE PARA LAS CONVOCATORIAS  --}}
<!doctype html>
<html>
 <head>
    <title>Convocatoria - @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/convo/convoca.css')}}" rel="stylesheet">            
    
   
   
 </head>  

   <body>
        <div class=info>
         @yield("informacion")
        </div>    
        
          @include("admin.layouts.script")

  </body>
        
</html> 