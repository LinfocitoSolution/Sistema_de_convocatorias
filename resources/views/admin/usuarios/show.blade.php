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
                <h1>User 
          </div> 

        <!---FIN CABEZA-->
        <!---INICIO CUERPO-->  
             <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                <tbody>
                <tr><!---------------{ $user->id }}--->
                    <th>Nombre</th><td>{{ old('name', isset($user) ? $user->name : '') }}</h1></td>
                </tr>
                <!-------{ trans('users.name') }}-->
                <th>Apellido</th><tr><th> {{ old('lastname', isset($user) ? $user->lastname : '') }}</th>
                    <!----{ $user->name }}--->
                    <td>{{ old('username', isset($user) ? $user->username : '') }}</td></tr>
                 <!-----{ trans('users.email') }}---->   
                <tr><th>{{ old('email', isset($user) ? $user->email : '') }}  </th>
                    <!---{ $user->email }} --->
                    <td>carlos@gmail.com</td></tr>
                     <!-----{ trans('users.password') }} --->
                <tr><th> </th>
                    <!---{ $user->password }} -->
                    <td> carlitos123</td></tr>
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