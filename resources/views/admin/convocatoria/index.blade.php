@extends("admin.layouts.plantilladmin")

@section('title')
    nueva-convocatoria
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    
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
</div>
  <!-- /.content-wrapper -->

@endsection