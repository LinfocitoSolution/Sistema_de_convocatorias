@extends("admin.layouts.plantilladmin")

@section('title')
    Crear-area
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <h1> Crear area</h1>
                    </div>    
                    <div class="card-body">                       
                        <form class="form-horizontal"  action="{{ route('area.store') }}" method="POST">                                                      
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                           {{ csrf_field() }}                           
                            @include('admin.areas.form')
                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Guardar</button>
                                <a class="btn btn-outline-dark" href="{{route('area.index') }}">Cancelar</a>
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