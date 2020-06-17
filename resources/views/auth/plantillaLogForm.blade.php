<!doctype html>
<html lang="en">
{{-- <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">--> --}}
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title> @yield("title")</title>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
<!--Styles-->
<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
@if(session()->has('message'))
    <div class="alert alert-success mb-0">
        {{ session()->get('message') }}
    </div>
@endif
</head>

<body>
  
   
     @include("layouts.partials.navbar")
     <div class="login">
     @yield("infoGeneral")
     </div>
     @include("layouts.partials.scripts")
     
</body>
</html>