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
<link rel="stylesheet" href="{{URL::asset('plugins/fontawesome-free/css/all.min.css')}}">
<!-- Theme style -->

<link rel="stylesheet" href="{{URL::asset('dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/admin/style.css')}}" >

 
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="{{URL::asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" >
<!---Select2 multiple-->
<link href="{{URL::asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet')}}" />
<script src="{{ URL::asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script>
@if(session()->has('message'))
    <div class="alert alert-success mb-0">
        {{ session()->get('message') }}
    </div>
@endif
</head>
<body class="hold-transition sidebar-mini">
   <div class="wrapper"> 
     @include("admin.layouts.navbar")
     <div class="container-fluid">
          @yield("content")
      </div>
     
      @include("admin.layouts.sidebar")
   </div> 
  

 @include('admin.layouts.script')
</body>
</html>