@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
    Usuario
@endsection


@section('content')
<div class="content-wrapper">
 <div class="container">
    <div class="card mt-5" >
        <!--CABEZA-->
           <div class="card-header">
     <!-----User { $user->id }}----->
                <h1>User </h1>
          </div> 

        <!---FIN CABEZA-->
        <!---INICIO CUERPO-->  
             <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                <tbody>
                <tr><!---------------{ $user->id }}--->
                    <th>Nombre</th><td>{{$user->name}}</h1></td>
                </tr>
                <!-------{ trans('users.name') }}-->
                <th>Apellido</th><td> {{ $user->lastname}}
                <tr>
                    <!----{ $user->name }}--->
                <th>Nombre de usuario</th><td>{{$user->username}}</td>
                </tr>
                 <!-----{ trans('users.email') }}---->   
                <th>Email</th><th>{{$user->email}}</th>
                <tr>
                <th>Contraseña</th><th></th>
                
                    <!---{ $user->password }} -->
                    
                </tbody>
            </table>
            </div>
        
         <!---FIN DE CUERPO--->
         <!----INICIO DE PIE-->   
            <div class="card-footer">
                <div class="text-center">
                        <!----href--{ url('admin/users/' . $user->id . '/edit') }}-->
                        <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-dark btn-xm mr-3" data-toggle="tooltip" data-placement="left" title="Presiona el botón para EDITAR "><span class="fa fa-edit mr-2" aria-hidden="true"></span>Editar</a>
                       <!--- !! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/users', $user->id],
                            'style' => 'display:inline'
                        ]) !!}
                            !! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete User',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        !! Form::close() !!}---->
                   
                        <a class="btn btn-dark" data-toggle="tooltip" data-placement="right" title="Presiona el botón para volver a la tabla de usuarios" href="{{route('usuarios.index')}}"><i class="fa fa-arrow-left mr-2"></i>Atrás</a>
                   </div>
                </tfoot>
            </div>
            <!---FIN DE PIE-->
                
               

            </div>
        </div>
    </div>
         
@endsection