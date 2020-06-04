<!doctype html>
<html lang="en">
{{-- <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">--> --}}
<head>

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title> @yield("title")</title>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!--Styles-->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
<!--<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/jquery.validate.js"></script>-->
</head>

<body>
  
   
     @include("layouts.partials.navbar")
     <div class="login">
     @yield("infoGeneral")
     </div>
     @include("layouts.partials.scripts")
     
</body>
</html>