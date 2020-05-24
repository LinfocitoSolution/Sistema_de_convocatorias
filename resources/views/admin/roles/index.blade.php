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
            @foreach ($roles as $rol)
                <tr>
                    <!--nombre del rol  entre los td-->
                    <td> {{$rol->name}}</td>
                    <td>
                       <!--2para cada rol permiso as item-->
                                    <!--nombre del item antes del final del span-->   
                                    @foreach ($permissions as $permission)
                                          @if (app('App\Http\Controllers\RoleController')->hasPermission($rol,$permission) == 1)
                                            <span class="badge badge-info">{{$permission->name}}</span>
                                          @endif
                                    @endforeach                          
                       <!--fin del  2para-->
                    </td>
                    <td>
                        <!--la ruta se llamara admin.roles.edit, rol dependienfo del id  { route('roles.edit', $rol->id) }}">-->
                        <a class="btn btn-info btn-sm" href="{{ route('admin.roles.edit', $rol->id) }}">
                             <i class="fa fa-pencil-alt"></i>
                        </a>                         
                       
                      <form action="{{route('roles.destroy',$rol->id)}}" method="POST" style="display:inline-block;">
                        {{ csrf_field() }}                                                              
                        {{ method_field('DELETE') }}                            
                        <button class="btn btn-danger btn-sm" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar este rol?')">
                            <i class="fa fa-trash-alt"></i>                                
                        </button>                            
                      </form>
                                           
                    </td>
                  </tr> 
             @endforeach
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