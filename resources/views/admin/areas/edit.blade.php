@extends("admin.layouts.plantilladmin")

@section('title')
    Editar-area
@endsection

@section("content")
 <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Editar area</h1>
                    <div class="card-body">                        
                        <form action="{{route('areas.update',$area)}}" class="form-horizontal"  method="POST">                            
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            @include('admin.areas.form')
                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Actualizar</button>
                                <a class="btn btn-outline-dark" href="{{route('areas.index') }}">Cancelar</a>
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
{{-- la barra para deslizar abajo en el sidebar no es problema de este blade     --}}