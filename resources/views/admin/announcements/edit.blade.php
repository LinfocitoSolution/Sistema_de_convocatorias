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
          {{ method_field('PUT') }}
          <h1>Editar convocatoria</h1>
            @include('admin.announcements.form')
                   <br>
        </form>       
   </div>      
</div>
  <!-- /.content-wrapper -->
@endsection