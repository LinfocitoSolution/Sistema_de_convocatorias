@extends("admin.layouts.plantilladmin")

@section('title')
    Calificación del Postulante
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-header">
                    <h1> Registrar notas del postulante:</h1>
                    <h3>{{$user->name }} {{$user->lastname}}</h3>
                    </div>    
                    <div class="card-body">                   
                        <form class="form-horizontal" action="{{ route('registrar.notas',$user) }}" method="POST">                                                      
                            {{ csrf_field() }}               
                            @include('admin.conocimientoCalif.formCalif')
                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                                <a class="btn btn-outline-dark" href="{{route('conocimientoCalif.index')}}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </div>
 </div>
  <!-- /.content-wrapper -->

@endsection