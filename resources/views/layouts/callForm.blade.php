{{-- FORMATO UNICAMENTE PARA LAS CONVOCATORIAS  --}}
<!doctype html>
<html>
 <head>
    <title>Convocatoria - @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <style>
    #contenido{
        width:100%;
        margin:0 auto;
        border=1px;
    }
    header{
        border:1px solid;
        margin:7px,2px;
        margin-bottom:0px;
        border-color:white;
    }
    section{
       /*background-image:url('imagenes/celeste.jpg');*/
        background:#DCDCDC;
        border: 1px solid;
        border-color:lightblue;
        width:99,8%;
        height:1000px;
        margin-top:1px;
        margin:2px
        /*position:relative;*/
    }
    footer{
        border:0px solid;
        width:99,8%;
        margin:0px 2px;
        /*height:100px;*/
    }

   </style>
 </head>  

   <body>
    <div id="contenido">
         <header>
         
         @yield("cabecera")
         </header>

         <section>
            
             @yield("informacion")
            
         </section>

         <footer>
           
           @include("layouts.footer")
         </footer>
    </div>
      {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="{{aseet('js/bootstrap.min.js')}}"  type="text/javascrpt"></script>
     <script src="{{asset('jquery/jquery-3.4.1.slim.min.js')}}" type="text/javascript"></script>

  </body>
        
</html> 