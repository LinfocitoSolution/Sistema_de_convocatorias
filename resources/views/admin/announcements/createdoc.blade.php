@extends("admin.layouts.plantilladmin")

@section('title')
    Nueva Convocatoria de Docencia
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
      <nav aria-label="Page navigation example">
        <ul class="pagination">
              <li class="page-item"><a class="page-link text-dark" href="{{ route('call.create')}}"  data-toggle="tooltip" data-trigger="hover" title="presiona para crear nueva convocatoria de Laboratorio">Laboratorio</a></li>
              <li class="page-item"><a class="page-link bg-dark" href="{{route('call.createdoc')}}">Docencia</a></li>
        </ul>
     </nav>
      <div class="row">
       <div class="col-sm-12">
        <div class="card mt-2"> 
          <div class="card-header">
            <h5>Crear convocatoria de Docencia</h5>
          </div>
          <div class="card-body">
  <div class="medio">
        <form class="form-group" method="POST" action="{{route("call.storedoc")}}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <!---- { method_field('PUT') }}-->
          
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