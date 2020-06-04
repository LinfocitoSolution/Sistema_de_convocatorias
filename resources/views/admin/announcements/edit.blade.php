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
        <form class="form-group" method="POST" action="/call/{{$call->id}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form group">
                    <h1>Subir convocatoria</h1>
                    <br>
                        <label for="">Título de la convocatoria</label>
                        <div class="row">
                           <div class="col">
                            <input class="form-control" name="titulo" type="text" value="{{ $call->titulo_convocatoria }}">
                           </div>
                         </div>
                         <label for="">Descripción: </label>
                         <div class="row">
                            <div class="col">
                              <textarea class="form-control" name="descripcion" rows="3">{{ $call->descripcion }}</textarea>
                            </div>
                         </div>
                      <br>
                      <input type="file" name="archivo" disabled>                      
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