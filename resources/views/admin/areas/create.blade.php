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
                <div class="card mt-5">
                    <div class="card-header">
                        <h1> Crear area</h1>
                    <div class="card-body">
                       <!--action="{ route('admin.areas.store') }}"--va dentro del form-->
                        <form class="form-horizontal"  method="POST">
                           <!-- { csrf_field() }}-->

                            @include('admin.areas.form')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-primary" type="submit">Guardar</button>
                                <a class="btn btn-outline-danger" href="{{url('areas') }}">Cancelar</a>
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