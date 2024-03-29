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
    <div class="card mt-2"> 
      <div class="card-header">  
        <h1>Roles</h1>
        {{-- <!--la ruta debe llamarse  admin.roles.create--> --}}
        {{-- <a class="btn btn-success px-2" href="{{ url('create') }}">Nuevo --}}
          <a class="btn btn-dark px-2" href="{{ route('roles.create') }}">Nuevo
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
                                            <span class="badge badge-dark">{{$permission->name}}</span>
                                          @endif
                                    @endforeach                          
                       <!--fin del  2para-->
                    </td>
                    <td>
                        {{-- <!--la ruta se llamara admin.roles.edit, rol dependienfo del id  { route('roles.edit', $rol->id) }}">--> --}}
                        {{-- <a class="btn btn-info btn-sm mx-1 my-1" href="{{ route('roles.edit', $rol->id) }}"> --}}
                                                
                       
                      <form action="{{ route('roles.destroy',$rol->id) }}" method="POST" style="display:inline-block;">
                        {{ csrf_field() }}                                                              
                        {{ method_field('DELETE') }}     
                        
                        @if ($rol->id != 1)
                          <a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="Presiona para editar un rol" href="{{route('roles.edit',$rol)}}"> 
                            <i class="fa fa-pencil-alt"></i>
                          </a> 
                          <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="Presiona para eliminar un rol" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar este rol?')">
                              <i class="fa fa-trash-alt"></i>                                
                          </button>  
                        @endif

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