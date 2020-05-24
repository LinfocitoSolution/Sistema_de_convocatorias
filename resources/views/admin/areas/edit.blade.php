@extends("admin.layouts.plantilladmin")

@section('title')
    Editar-area
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Editar area</h1>
                    <div class="card-body">
                        <!--action="{ route('admin.areas.update', $area->id) }}"--va dentro del form-->
                        <form class="form-horizontal"  method="POST">
                           <!-- { method_field('PUT')}}
                            { csrf_field() }}-->

                            @include('admin.areas.form')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-primary" type="submit">Actualizar</button>
                                <a class="btn btn-outline-danger" href="{{url('areas') }}">Cancelar</a>
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
  <!-- /.content-wrapper -->

@endsection