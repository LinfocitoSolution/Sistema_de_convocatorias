@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
    Descripción
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <h1>Crear Descripción</h1>
                     </div>
                         <div class="card-body">
                        <form class="form-horizontal" action="#" method="POST">                                                      
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{ csrf_field() }}  
                            @include('admin.meritos.form_descripcion')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                            <a class="btn btn-outline-dark" href="{{route('descrip.indexdescripcion')}}">Cancelar</a>
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

