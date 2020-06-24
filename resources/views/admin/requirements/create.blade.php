@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
    Requerimiento
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-user-edit"></i>Crear Requerimiento</div>

                         
                           
                    <div class="card-body">
                        <form class="form-horizontal" action="#" method="POST">
                            

                            @include('admin.requirements.form')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                            <a class="btn btn-outline-dark" href="">Cancelar</a>
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

