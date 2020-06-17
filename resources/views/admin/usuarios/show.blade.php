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
               <tfoot>
                <tr>
                    <td colspan="2">
                        <!----href--{ url('admin/users/' . $user->id . '/edit') }}-->
                        <a href="" class="btn btn-dark btn-xm" title="Edit User"><span class="fa fa-edit" aria-hidden="true"></span></a>
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
                    </td>
                 </tr>
                </tfoot>
            </div>
            <!---FIN DE PIE-->
                
               

            </div>
        </div>
    </div>
         
@endsection