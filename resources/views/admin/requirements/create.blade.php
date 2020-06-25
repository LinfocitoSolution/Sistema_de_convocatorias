@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
    Requerimiento
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1>Crear Requerimiento</h1>
                        </div>

                         <div class="card-body">
                        <form class="form-horizontal" action="{{route("requerimientos.store")}}" method="POST">                                                      
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{ csrf_field() }}  
                            @include('admin.requirements.form')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                            <a class="btn btn-outline-dark" href="{{route('requerimientos.index') }}">Cancelar</a>
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

