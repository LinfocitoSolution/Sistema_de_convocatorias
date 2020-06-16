@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  POSTULANTE
@endsection
@section("infoGeneral")
<div classs=contenido-postulante>
    <div class="container">
        <div class="d-flex justify-content-center h-150">
            <div class="card">
                <!---cabeza del perfil--->
                <div class="card-header text-white">
                    <h3>Perfil</h3>
                </div>
        
                <!--cuerpo del perfil-->				
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                        <tr>
                            <th>Nombre</th><td>{{$user->name}}</h1></td>
                        </tr>
                        
                            <th>Apellido</th><td> {{ $user->lastname}}
                        <tr>
                            <th>Nombre de usuario</th><td>{{$user->username}}</td>
                        </tr> 
                            <th>Email</th><th>{{$user->email}}</th>
                        <tr>
                            <th>Contraseña</th><th></th>
                        
                            <!---{ $user->password }} -->
                        </tbody>
                    </table>
                </div>
                <!----fin del cuerpo perfil--->
                 <!----INICIO DE PIE-->   
            <div class="card-footer">
                <tfoot>
                 <tr>
                     <td colspan="2">
                        <button class="btn btn-dark btn-xm" href="{{ route('postulante.edit', $user->id) }}"  data-toggle="tooltip" data-placement="left" title="Presione el bot&oacute;n para EDITAR"><span class="fa fa-edit" aria-hidden="true"></span></button>
                     </td>
                  </tr>
                 </tfoot>
             </div>
             <!---FIN DE PIE-->
@endsection		
	