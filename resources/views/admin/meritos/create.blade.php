@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
    Méritos
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <h2>Crear tabla de Méritos</h2>
                        <h3>Puntajes limite para cada convocatoria:</h3>
                        @foreach($calls as $call)
                        @if($call->publicado=="no")
                        @if($call->unit_id==$uni)
                    <h2>{{$call->titulo_convocatoria . ":"}} {{100-(App\Merito::where('convocatoria_id', '=',$call->id )->get()->sum("score"))}}</h2>
                        @endif
                        @endif
                        @endforeach
                        </div>
                         <div class="card-body">
                        <form class="form-horizontal" action="{{route('merito.storemerito')}}" method="POST">                                                      
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{ csrf_field() }}  
                            @include('admin.meritos.form')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                            <a class="btn btn-outline-dark" href="{{route('merito.index')}}">Cancelar</a>
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

