@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
    Usuario
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <i class="fa fa-user-edit"></i>Crear usuario</div>

                         <!--@if (count($errors) > 0)
			            <div class="alert alert-danger">
				           <ul>
				            	@foreach ($errors->all() as $error)
					            	<li>{{ $error }}</li>
				            	@endforeach
				          </ul>
		            	</div>
                           @endif-->
                           
                    <div class="card-body">
                        <form class="form-horizontal" action="{{route('usuarios.store')}}" method="POST" autocomplete="off">
                            {{ csrf_field() }}

                            @include('admin.usuarios.form')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                            <a class="btn btn-outline-dark" href="{{route('usuarios.index')}}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
    </div>
</div>

@endsection

