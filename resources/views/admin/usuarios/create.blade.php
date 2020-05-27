@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
    Usuario
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit"></i>Crear usuario</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{route('usuarios.guardar')}}" method="POST">
                            {{ csrf_field() }}

                            @include('admin.usuarios.form')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-success" type="submit">Guardar</button>
                            <a class="btn btn-outline-danger" href="{{route('usuarios.index')}}">Cancelar</a>
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

@section('scripts')
    <script>
        $('.js-example-basic-multiple').select2({
            placeholder: "Seleccione un valor",
            allowClear: true
        });
    </script>
@endsection