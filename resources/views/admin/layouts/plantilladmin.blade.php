<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <title>@yield("title")</title>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->

<link rel="stylesheet" href="dist/css/adminlte.min.css">
<link href="{{asset('assets/css/admin/style.css')}}" rel="stylesheet">
 
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
 
<body class="hold-transition sidebar-mini">
   <div class="wrapper"> 
     @include("admin.layouts.navbar")
     <div class="container-fluid">
          @yield('content')
      </div>
       
      @include("admin.layouts.sidebar")
   </div> 
  <!-- jQuery -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->

<script src="dist/js/adminlte.min.js"></script>
</body>
</html>