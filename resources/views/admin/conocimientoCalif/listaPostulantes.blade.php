@extends("admin.layouts.plantilladmin")

@section('title')
    Usuarios
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
  <div class="container">   
    <div class="card mt-2" >
      <div class="card-header">
        <h1> Postulantes</h1> 
      </div>
      <div class="card-body">
         <table class="table table-bordered table-striped table-sm">
            <thead>
             <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nombre de auxiliatura</th>
                <th>Opciones</th>
             </tr>
            </thead>
            <tbody>
            @foreach($postulantes as $user)
                      <tr>           
                        @if (App\Curriculum::where('user_id', '=', $user->id)->exists())
                          @if($user->habilitados->first()->name == "habilitado")
                              <td>{{$user->name}}</td>
                              <td>{{$user->lastname}}</td>
                              <td>{{$user->requerimientos->first()->nombre_auxiliatura}}</td>
                              @if (!App\Calificacion_conocimiento::where('user_id', '=', $user->id)->exists())
                                  @if ($user->requerimientos->first()->tipo_requerimiento == "requerimiento de laboratorio")
                                    <td>                                
                                      <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para calificar a un usuario" href="{{ route('calificar.postulante',$user)}}">
                                          <i class="fa fa-eye"></i>
                                      </a>
                                    </td>      
                                  @else
                                    <td>                                
                                      <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para calificar a un usuario" href="{{ route('calificar.postulanteDoc',$user)}}">
                                          <i class="fa fa-eye"></i>
                                      </a>
                                    </td>      
                                  @endif
                              @endif
                          @endif
                        @endif                              
                      </tr> 
              @endforeach
            </tbody>
           </table>
         </div>
      </div>   
   </div>
</div>
@endsection