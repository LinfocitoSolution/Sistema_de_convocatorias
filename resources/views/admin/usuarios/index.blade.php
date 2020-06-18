@extends("admin.layouts.plantilladmin")

@section('title')
    Usuarios
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
  <div class="container">   
    <div class="card mt-5" >
      <div class="card-header">
        <h1> Usuarios</h1> 
            <a class="btn btn-dark" data-toggle="tooltip" data-trigger="hover" title="presiona para crear un usuario"href="{{route('usuarios.create')}}">
              Nuevo 
              <i class="fa fa-user-plus"></i>&nbsp;
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
                @if (Auth::user()->id != $user->id)
                      <tr>                    
                        <td>{{$user->name}}</td>
                          <td>{{$user->lastname}}</td>
                          <td>{{$user->email}}</td>
                          <td>@foreach($user->roles as $item)
                          <span class="badge badge-dark">{{$item->name}}</span>
                              @endforeach
                          </td>
                          <td>
                            <form action="{{ route('usuarios.destroy', $user->id) }}"
                              style="display:inline-block;"
                              method="POST">

                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                              @foreach ($user->roles as $item)
                                @if ($item->name == 'Postulante')
                                  <button class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para eliminar usuario" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar el usuario?')">
                                    <i class="fa fa-trash-alt"></i>
                                  </button>

                                  <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="No disponible por el momento" href="{{ route('usuarios.show',$user->id)}}">
                                    <i class="fa fa-eye"></i>
                                  </a>
                                @else
                                  
                                    @if ($item->name != 'Admin')                                
                                        <button class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para eliminar usuario" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar el usuario?')">
                                          <i class="fa fa-trash-alt"></i>
                                        </button>

                                        <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para observar al usuario" href="{{ route('usuarios.show',$user->id)}}">
                                          <i class="fa fa-eye"></i>
                                        </a>

                                        <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para editar usuario" href="{{ route('usuarios.edit', $user->id) }}">
                                          <i class="fa fa-edit"></i>
                                        </a>
                                    @endif
                                  
                                @endif
                              @endforeach
                          </form>
                        </td>
                      </tr> 
                @endif
              @endforeach
            </tbody>
           </table>
         </div>
      </div>   
   </div>
</div>
@endsection