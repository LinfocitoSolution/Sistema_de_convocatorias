<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> plantilla </title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    </head>

    <body>
        @yield("cabecera")
        @include("layouts.navbar")
        
        @yield("infoGeneral")

        @yield("pie")
        @include("layouts.footer")

    </body>
</html>