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
        <div class="dropdown" ><button class="btn btn-dark dropdown-toggle my-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Carreras</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($carreras as $ca)
              <a class="dropdown-item" href="{{route('lista.postulantes',['carrera'=>$ca->id])}}">{{$ca->name}}</a><br>
            @endforeach
          </div>
        </div>
      </div>

      <div class="card-body">
         <table class="table table-bordered table-striped table-sm">
            <thead>
             <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nombre de auxiliatura</th>
                <th>Puntaje</th>
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
                              <p hidden>{{$a=App\Calificacion_conocimiento::where('user_id',$user->id)->first()}}</p>
                              <td>
                                @foreach($calf as $caf)
                            @if($caf->user_id==$user->id)
                            {{($caf->score)}}
                            @endif
                            @endforeach
                            </td>
                              @if(!App\Calificacion_conocimiento::where('user_id', '=', $user->id)->exists())
                                  @if ($user->requerimientos->first()->tipo_requerimiento == "requerimiento de laboratorio")
                                    <td>                                
                                      <a class="btn btn-dark btn-sm ml-2 mt-2" data-toggle="tooltip" data-trigger="hover" title="Presiona para calificar a un usuario" href="{{ route('calificar.postulante',$user)}}">
                                          <i class="fa fa-check-square"></i>
                                      </a>
                                    </td>      
                                  @else
                                    <td>                                
                                      <a class="btn btn-dark btn-sm ml-2 mt-2" data-toggle="tooltip" data-trigger="hover" title="Presiona para calificar a un usuario" href="{{ route('calificar.postulanteDoc',$user)}}">
                                          <i class="fa fa-check-square"></i>
                                      </a>
                                    </td>      
                                  @endif
                              @elseif($a->publicado!="si")
                              <td>
                              <form action="{{ route('conocimiento.publicar',$user->id) }}" style="display:inline-block;" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button class="btn btn-dark btn-sm mt-2 ml-2 px-1" data-toggle="tooltip" data-trigger="hover" title="presiona para publicar la nota"type="submit" margin-left="50" onclick="return confirm('Está seguro que desea publicar esta nota?')">
                                  <i class="fa fa-cloud"></i>
                                </button>
                              </form>
                                  <form action="{{route('eliminar.nota',$user)}}" method="POST" style="display:inline-block;">
                                      {{ csrf_field() }}                                                              
                                      <button class="btn btn-dark btn-sm mx-1 mt-2 ml-1" data-toggle="tooltip" data-trigger="hover" title="presione para eliminar calificación" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar la calificación?')">
                                          <i class="fa fa-trash-alt"></i>                                
                                      </button>                            
                                  </form>
                                </td>
                                @else
                                <td>
                                <form action="{{ route('conocimiento.quitar',$user->id) }}" style="display:inline-block;" method="POST">
                                  {{ csrf_field() }}
                                  {{ method_field('PUT') }}
                                  <button class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para quitar la publicacion de nota"type="submit" margin-left="50" onclick="return confirm('Está seguro que desea quitar la publicacion?')">
                                    <i class="fa fa-times"></i>
                                  </button>
                                </form>
                              </td>
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