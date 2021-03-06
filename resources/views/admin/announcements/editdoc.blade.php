@extends("admin.layouts.plantilladmin")

@section('title')
    Editar Convocatoria de Docencia
@endsection
@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    
      <!-- @if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
    @endif-->
    <div class="container">
      <div class="row">
       <div class="col-sm-12">
        <div class="card mt-2"> 
          <div class="card-header">
            <h1>Editar convocatoria de Docencia</h1>
          </div>
          <div class="card-body">
  <div class="medio">
        <form class="form-group" method="POST" action="{{route('call.updatedoc', $call->id)}}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          {{ method_field('PUT') }}
          
            @include('admin.announcements.formdoc')
                   <br>
                   
                   <div class="form-actions text-center mt-2">
                    <button class="btn btn-outline-dark" type="submit">Guardar</button>
                    <a class="btn btn-outline-dark" href="{{route('call.index') }}">Cancelar</a>
                  </div>  
        </form> 
      </div> 
        </div>
       </div>
      </div>
    </div>      
   </div>      
</div>
  <!-- /.content-wrapper -->
@endsection