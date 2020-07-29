@extends("admin.layouts.plantilladmin")

@section('title')
    Crear tabla de calificación
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <h1> Registrar notas de la tabla de conocimientos</h1>
                    </div>    
                    <div class="card-body">                   
                        <form class="form-horizontal"  action="{{ route('registrar.tabla',$call) }}" method="POST">
                           {{ csrf_field() }}                          
                            @include('admin.conocimientoCalif.form')
                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                                <a class="btn btn-outline-dark" href="{{route('conocimientoCalif.index')}}">Cancelar</a>
                            </div>
                        </form>
                        <h6>*Recuerde que la sumatoria de las notas por auxiliatura debe ser 100</h6>    
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </div>
 </div>
  <!-- /.content-wrapper -->

@endsection