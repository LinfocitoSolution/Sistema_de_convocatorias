@extends("admin.layouts.plantilladmin")

@section('title')
    Nueva Convocatoria de Laboratorio
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
    <div class="container">
      <nav aria-label="Page navigation example">
         <ul class="pagination">
               <li class="page-item active"><a class="page-link" href="{{ route('call.create')}}">Laboratorio</a></li>
               <li class="page-item"><a class="page-link" href="{{route('call.createdoc')}}">Docencia</a></li>
         </ul>
      </nav>
      <div class="row">
       <div class="col-sm-12">
        <div class="card mt-2"> 
          <div class="card-header">    
            <h5>Crear convocatoria de Laboratorios </h5>
            </div>

            <div class="card-body">
             <form class="form-group" method="post" action="{{url("/call")}}" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <!---{method_field('PUT')}}-->
                  @include('admin.announcements.form')
            
               <div class="form-actions text-center">
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