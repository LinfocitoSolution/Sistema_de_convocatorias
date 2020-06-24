@extends("admin.layouts.plantilladmin")

@section("title")
    Roles
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
    <div class="container">
        <div class="row aling-items-center justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Editar Rol</h1></div>
                    <div class="card-body">
                    <form class="form-horizontal" action="/rol/{{$rol->id}}" method="POST" autocomplete="off">
                        {{ method_field('PUT')}}
                        {{ csrf_field() }}
                            @include('admin.roles.partials.form')
                            <div class="form-actions text-center">
                                <button class="btn btn-outline-dark" type="submit">Actualizar</button>
                                <a class="btn btn-outline-dark" href="{{ url('/rol') }}">Cancelar</a>
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
