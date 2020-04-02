<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title> plantilla </title>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
    #contenedor{
        width:100%;
        margin:0 auto;
        border=1px;
    }
    header{
        border:1px solid;
        margin:7px 2px;
        margin-bottom:0px;
        border-color:white;
    
    }
    section{
        background:lightblue;
        border: 1px solid;
        border-color:lightblue;
        width:99,8%;
        height:1000px;
        margin-top:1px;
        margin:2px
        /*position:relative;*/
    }
    .login{
        margin-top:1px;
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
<div id="contenedor">
   <header>
     @yield("cabecera")
     @include("layouts.navbar")
   </header>

   <section>
    <div class="login">
     @yield("infoGeneral")
     </div>
   </section>
 
   <footer>
     @yield("pie")
     @include("layouts.footer")
   </footer>
</div>
<script src="{{aseet('js/bootstrap.min.js')}}"  type="text/javascrpt"></script>
</body>
</html>