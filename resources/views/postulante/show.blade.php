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
                        
                            <!---{ $user->password }} -->
                        </tbody>
                    </table>
                </div>
                <!----fin del cuerpo perfil--->
                 <!----INICIO DE PIE-->   
            <div class="card-footer">
                @if(Auth::user()->roles->first()->name=='Postulante')
                  <div class="text-center">
                        <a class="btn btn-outline-dark  text-white m-2 my-sm-2" data-toggle="tooltip" data-placement="left" title="Presiona el botón para EDITAR" href="{{ route('postulante.edit', $user->id) }}"><i class="fa fa-edit mr-2"></i>Editar</a>
                        <a class="btn btn-outline-dark  text-white m-2 my-sm-2" data-toggle="tooltip" data-placement="top" title="El botón no esta disponible" href="#"><i class="fa fa-key mr-2"></i>Cambiar Contraseña</a>
                        <a class="btn btn-outline-dark text-white m-2" data-toggle="tooltip" data-placement="right" title="Presiona el botón para volver a la pantalla principal" href="{{url('/')}}"><i class="fa fa-arrow-left mr-2"></i>Atrás</a>
                </div>
               @else
               <div class="text-center">
                   <a class="btn btn-outline-dark  text-white m-2 my-sm-2" data-toggle="tooltip" data-placement="left" title="Presiona botón para EDITAR" href="{{ route('postulante.edit', $user->id) }}"><i class="fa fa-edit mr-2"></i>Editar</a>
                   <a class="btn btn-outline-dark  text-white m-2 my-sm-2" data-toggle="tooltip" data-placement="top" title="El botón no esta disponible" href="#"><i class="fa fa-key mr-2"></i>Cambiar Contraseña</a>
                   <a class="btn btn-outline-dark text-white m-2" data-toggle="tooltip" data-placement="right" title="Presiona el botón para volver alpanel de trabajo" href="{{url('administrador')}}"><i class="fa fa-arrow-left mr-2"></i>Atrás</a>
              </div>
              @endif
            </div>  
             <!---FIN DE PIE-->
@endsection		
	