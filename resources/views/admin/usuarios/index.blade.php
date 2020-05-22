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
    <a class="btn btn-success" href="{{route('usuarios.create')}}">
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
            @foreach($users as $user)
                <tr>
                <td>{{$user->name}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>roles</td>
                    <td>

                        <a class="btn btn-info btn-sm" href="{{ route('usuarios.edit', $user->id) }}">
                            <i class="fa fa-edit"></i>
                        </a> &nbsp;
                        <form action="{{ route('usuarios.destroy', $user->id) }}"
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
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection