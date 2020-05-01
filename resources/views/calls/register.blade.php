<!doctype html>
@extends("layouts.callForm")
<html>
<head>
  <meta charset="utf-8">
    <title>Documento sin titulo</title>
      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

   <style>
     .medio{
        margin-top:30px;
        margin-left:50px;
        margin-right:50px;
        padding-left:30px;
        padding-bottom:30px;
        padding-top:30px;
        background:#ccf2ff;

     }

   </style>
</head>
<body>
@section("cabecera")
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand  text-white" href="{{url('noregister')}}" tabindex="-1" >Registro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('noregister') }}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Historial</a>
      </li>
    </ul>
      <form class="form-inline">
         <a class="btn btn-outline-success  text-white my-2 my-sm-0" type="submit" href="{{url('login')}}">Cerrar Sesion</a>
      </form>
  </div>
</nav>
@endsection

<!--@section('title','Registro')-->

@section("informacion")
@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
  <div class="medio">
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script> 
        <script> function saveToPDF(){
             var doc = new jsPDF();
             doc.text(20,20, description.value.replace(/\n/g, "\r\n"));
             doc.text(requirements.value.replace(/\n/g, "\r\n"),20,30,0);//h,v,espacio
             doc.text(docs.value.replace(/\n/g, "\r\n"),20,40,0);
             doc.text(format.value.replace(/\n/g, "\r\n"),20,50,0);
             doc.save('document.pdf');
            }
        </script>
      <script> function getHTML(){

                var doc = new jsPDF();
                doc.html(document.body);
                doc.save('html.pdf');
            }
      </script>
        <form class="form-group" method="post" action={{url("/call")}} enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- 
                <label for="descriptionFormTextarea">Descripción</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
                <label for="requirementsFormTextarea">Requisitos</label>
                <textarea class="form-control" id="requirements" rows="3"></textarea>
                <label for="docsFormTextarea">Documentos a presentar</label>
                <textarea class="form-control" id="docs" rows="3"></textarea>
                <label for="formatFormTextarea">Formato de entrega</label>
                <textarea class="form-control" id="format" rows="3"></textarea>   
                 -->
                <div class="form group">
                    <h1>Subir convocatoria</h1>
                    <br>
                        <label for="">Título de la convocatoria</label>
                        <div class="row">
                           <div class="col">
                             <input type="text" name="titulo" class="form-control" value="{{old('titulo')}}">
                           </div>
                           <div class="col">
                            <button type="submit" class="btn btn-primary" margin-left="50">Guardar</button>
                         </div>
                         </div>
                      <br>
                      <input type="file" name="archivo">                      
                </div>
                   <br>
                      
                   
            </form>
                    
               {{-- 
                <button class="btn btn-primary" onclick="saveToPDF();">DscargarPDF</button>
                <button class="btn btn-success" onclick="getHTML();">DscargarHTML</button>  
                comment --}}
       
   </div>      
@endsection
</body>
@section("pie")
@endsection
</html>