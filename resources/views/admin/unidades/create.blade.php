@extends("admin.layouts.plantilladmin")

@section('title')
    Crear-unidad
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1> Crear unidad</h1>
                    </div>    
                    <div class="card-body">                 
                                                <!--{ route('areas.store') }}-->      
                        <form class="form-horizontal"  action="{{ route('unidades.store') }}" method="POST" autocomplete="off">                                                      
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <!-- { csrf_field() }} -->                          
                            @include('admin.unidades.form')
                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                                <a class="btn btn-outline-dark" href="{{route('unidades.index') }}">Cancelar</a>
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