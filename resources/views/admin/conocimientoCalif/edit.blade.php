@extends("admin.layouts.plantilladmin")

@section('title')
    Editar-Tabla de conocimientoCalif
@endsection
@section("content")
 <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <h1>Editar Tabla de conocimientoCalif</h1>
                    </div>    
                    <div class="card-body">
                        <!----va dentro del action  /area/{$area->id}}-->                        
                        <form action="{{ route('conocimientoCalif.update', $conocimientoCalif->id) }}" class="form-horizontal"  method="POST">                            
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            @include('admin.conocimientoCalif.form')
                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Actualizar</button>
                                <a class="btn btn-outline-dark" href="{{route('conocimientoCalif.index')}}">Cancelar</a>
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
