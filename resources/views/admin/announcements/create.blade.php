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
    <div class="container">
      <div class="row">
       <div class="col-sm-12">
        <div class="card mt-5"> 
          <div class="card-header">    
            <h1>Subir convocatoria</h1>
            </div>

            <div class="card-body">
             <form class="form-group" method="post" action={{url("/call")}} enctype="multipart/form-data">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  @include('admin.announcements.form')
            
               <div class="form-actions text-center">
                 <button class="btn btn-outline-dark" type="submit">Guardar</button>
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