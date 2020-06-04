@extends("admin.layouts.plantilladmin")

@section('title')
    Nueva Convocatoria
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
        <form class="form-group" method="post" action={{url("/call")}} enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form group">
                    <h1>Subir convocatoria</h1>
                    <br>
                        <label for="">Título de la convocatoria</label>
                        <div class="row">
                           <div class="col">
                              <input type="text" name="titulo" class="form-control" value="{{old('titulo')}}">
                           </div>
                         </div>
                         <label for="">Descripción: </label>
                         <div class="row">
                            <div class="col">
                              <textarea class="form-control" name="descripcion" rows="3"></textarea>
                            </div>
                         </div>
                      <br>
                      <input type="file" name="archivo">                      
                      <div class="col">
                        <br>
                        <button type="submit" class="btn btn-primary" margin-left="50">Guardar</button>
                      </div>
                </div>
                   <br>
        </form>       
   </div>      
</div>
  <!-- /.content-wrapper -->
@endsection