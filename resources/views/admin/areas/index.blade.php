@extends("admin.layouts.plantilladmin")

@section('title')
    Crear-area
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
  <div class="container"> 
    <div class="card mt-5">
      <div class="card-header">
          <h1> Areas</h1>
          <a class="btn btn-success px2" href="{{url('create')}}">Nuevo
              <i class="fa fa-user-plus"></i>
          </a>
      </div>
      <div class="card-body">
          <table class="table table-bordered table-striped table-sm">
              <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              <!--para areas como area-->  
                  <tr>
                      <td>nombre de area</td>
                      <td>
                          <!--ruta y area con su respectivo id-->
                          <a class="btn btn-info btn-sm" href="{{url('edit')}}">
                              <i class="fa fa-pencil-alt"></i>
                          </a> &nbsp;
                          <!--ruta admin.areas.destroy, area>id-->
                          <form action="#"
                                style="display:inline-block;"
                                method="POST">

                             <!-- csrf_field() }}
                              method_field('DELETE') }}-->

                              <button type="button" class="btn btn-danger btn-sm">
                                      <!--onclick="delete_action(event);"-->
                                  <i class="fa fa-trash-alt"></i>
                              </button>
                          </form>

                      </td>
                      <!--fin del para-->
              </tbody>
          </table>
      </div>
  </div>
  </div>  
</div>
  <!-- /.content-wrapper -->

@endsection