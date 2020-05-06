<!doctype html>
<html>
{{-- <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">--> --}}
<head>

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title> plantilla </title>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!--Styles-->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
  <div id="contenedor">
   
     @yield("cabecera")
     <div class="login">
     @yield("infoGeneral")
     </div>
  </div>
  <script>
			window.Laravel = <?php echo json_encode([
				'csrfToken' => csrf_token(),
			]); ?>
		</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</body>
</html>