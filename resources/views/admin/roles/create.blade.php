@extends("admin.layouts.plantilladmin")

@section("title")
    Create
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
    <div class="container">
        <div class="row aling-items-center justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Crear Rol</h1></div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('roles.store') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @include('admin.roles.partials.form')

                            <div class="form-actions text-center">
                                <button class="btn btn-outline-primary" type="submit">Guardar</button>
                                <a class="btn btn-outline-danger" href="{{ url('roles') }}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- /.content-wrapper -->

@endsection