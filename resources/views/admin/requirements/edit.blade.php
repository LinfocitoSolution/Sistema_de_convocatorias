@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
    Requerimientos
@endsection


@section('content')
<div class="content-wrapper">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-book-edit"></i>Editar Requerimiento</div>
                    <div class="card-body">
                                                            {{--{{ route('requerimientos.update', $requerimiento->id) }}--}}
                            <form class="form-horizontal" action="/requerimientos/{{$requerimiento->id}}" method="POST">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                                <div class="box-solid">
                                    @include('admin.requirements.form')
                                </div>

                                <div class="form-actions text-center">
                                    <button class="btn btn-outline-dark" type="submit">Actualizar</button>
                                <a class="btn btn-outline-dark" href="{{route("requerimientos.index")}}">Cancelar</a>
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

