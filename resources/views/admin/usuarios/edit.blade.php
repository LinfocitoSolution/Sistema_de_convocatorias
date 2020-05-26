@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
    Usuario
@endsection


@section('content')
<div class="content-wrapper">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit"></i>Editar usuario</div>
                    <div class="card-body">

                            <form class="form-horizontal" action="{{ route('usuarios.update', $user->id) }}" method="POST" autocomplete="off">
                                {{ method_field('PUT')}}
                                {{ csrf_field() }}

                                <div class="box-solid">
                                    @include('admin.usuarios.form')
                                </div>

                                <div class="form-actions text-center">
                                    <button class="btn btn-outline-primary" type="submit">Actualizar</button>
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