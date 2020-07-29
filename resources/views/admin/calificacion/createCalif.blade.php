@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
 Calificacion de meritos
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <h1> Calificacion de meritos</h1>
                    </div>
                         <div class="card-body">
                        <form class="form-horizontal" action="{{route('calif.store',$user)}}" method="POST">                                                      
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{ csrf_field() }}  
                            @include('admin.calificacion.form')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit" margin-left="50" onclick="return confirm('Está seguro de confirmar la calificacion ???)">Guardar</button>
                            <a class="btn btn-outline-dark" href="{{route('calif.index')}}">Cancelar</a>
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

