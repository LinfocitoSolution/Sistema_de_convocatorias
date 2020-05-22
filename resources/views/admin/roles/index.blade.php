@extends("admin.layouts.plantilladmin")

@section("title")
    Roles
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="card mt-5"> 
      <div class="card-header">  
        <h1>Roles</h1>
        <!--la ruta debe llamarse  admin.roles.create-->
        <a class="btn btn-success px-2" href="{{url('create')}}">Nuevo
        <i class="fa fa-user-plus"></i>
        </a>
      </div>
      <div class="card-body">
        <table class="table table-hover table-bordered table-striped table-sm">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Permisos</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
           <!--1para cada roles a rol  aqui--> 
                <tr>
                    <!--nombre del rol  entre los td-->
                    <td>Jefe Departamento</td>
                    <td>
                       <!--2para cada rol permiso as item-->
                                    <!--nombre del item antes del final del span-->
                           <span class="badge badge-info">edit user</span>
                       <!--fin del  2para-->
                    </td>
                    <td>
                        <!--la ruta se llamara admin.roles.edit, rol dependienfo del id-->
                        <a class="btn btn-info btn-sm" href="{{url('edit')}}">
                        <i class="fa fa-pencil-alt"></i>
                        </a> 
                        <!--la ruta debe ser admin.roles.destroy, rol dependiendo del id-->
                        

                           <!-- {csrf_field() }}
                            { method_field('DELETE') }}-->

                            <button type="button" class="btn btn-danger btn-sm">
                                    <!--delete_action(event); es la accion del onclick-->
                                <i class="fa fa-trash-alt"></i>
                            </button>
                    </td>
                  </tr> 
                  <tr>
                      <td>
                        aqui va nombre
                      </td>
                       
                      <td>
                        aqui va permisos
                      </td>
                       
                      <td>
                        aqui botones
                      </td>      
                  </tr>    
            <!--fin del 1para-->
            </tbody>
        </table>
      </div> 
     </div>
    </div>
   </div>
  </div>
</div>
  <!-- /.content-wrapper -->

@endsection