@extends("admin.layouts.plantilladmin")

@section('title')
    Usuarios
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
 <div class="card" >
    <div class="card-header">
           <i class="fa fa-align-justify"></i> Usuarios
    <a class="btn btn-success" href="{{route('create')}}">
            <i class="fa fa-plus"></i>&nbsp;Nuevo 
        </a>
    </div>
    <div class="card-body">
        
        <table class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Opciones</th>
                
                
            </tr>
            </thead>
            <tbody>
           <!-- -->
                <tr>
                    <td>Administrador</td>
                    <td>Admnin</td>
                    <td>admin@gmail.com</td>
                    <td>
                        
                            <span class="badge badge-warning">administrador</span>
                    
                    </td>
                    <td>

                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fa fa-edit"></i>
                        </a> &nbsp;
                        <form action="#"
                              style="display:inline-block;"
                              method="POST">

                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="button" class="btn btn-danger btn-sm"
                                    onclick="delete_action(event);">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                   </td>
                </tr>
                <tr>
                    <td>Brayan</td>
                    <td>Barreto</td>
                    <td>postulante@gmail.com</td>
                    <td>
                        
                            <span class="badge badge-warning">Postulante</span>
                    
                    </td>
                    <td>

                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fa fa-edit"></i>
                        </a> &nbsp;
                    <form action="{{url('usuarios_delete',1)}}"
                              style="display:inline-block;"
                              method="POST">

                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="button" class="btn btn-danger btn-sm"
                                    onclick="delete_action(event);">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                   </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection