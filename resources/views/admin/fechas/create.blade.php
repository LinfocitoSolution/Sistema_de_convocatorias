
@extends("admin.layouts.plantilladmin")

@section('title')
    Crear-Fecha
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <h1> Crear Fecha</h1>
                    </div>    
                    <div class="card-body">
                        <!---va dentro de action  { route('area.store') }}-->                       
                        <form class="form-horizontal"  action="{{ route('fechas.store') }}" method="POST">                                                      
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                           {{ csrf_field() }}                           
                            @include('admin.fechas.form')
                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                                <a class="btn btn-outline-dark" href="{{route('fechas.index')}}">Cancelar</a>
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