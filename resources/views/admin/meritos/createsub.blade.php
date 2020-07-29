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
                    <h1>Crear tabla de Submeritos </h1>
                    <h2>Submeritos para el merito:  {{$merito->name}}</h2>
                    <h2>Limite de puntuacion:  {{($merito->score)-(App\Submerito::where('merito_id', '=',$merito->id )->get()->sum("score"))}}</h2>
                    
                    
                        
                       
                        </div>

                         <div class="card-body">
                            
                        <form class="form-horizontal" action="{{route('submerito.storemerito',$merito->id)}}" method="POST">                                                      
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{ csrf_field() }}  
                            @include('admin.meritos.formsubmerito')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                                 <a class="btn btn-outline-dark" href="{{route('subMerito.indexsubmerito',$merito)}}">Cancelar</a>
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

