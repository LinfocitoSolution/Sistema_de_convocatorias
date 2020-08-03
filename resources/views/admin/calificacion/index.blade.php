@extends("admin.layouts.plantilladmin")
@section('title')
    Tabla de Calificación de Méritos
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->

 <div class="content-wrapper">
    
    
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h1>Tabla de Calificación de Méritos</h1>
               
            </div>
            <div class="card-body">
                


                
               
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nombre Postulante</th>
                       <th>Auxiliatura</th>
                       <th>Documentos Revisados</th>
                        <th>Puntaje de Meritos</th>
                        <th>Puntaje Promediado Final</th>
                         <th>Opciones</th>
                     </tr>
                    </thead>
               <tbody>  
                   @foreach($users as $user)
                   @foreach($user->habilitados as $hab)
                   @if($hab->name=="habilitado")
               <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->requerimientos->first()->nombre_auxiliatura}}</td>
                <td>
                    
                @foreach($calificacion as $caf)
                @if($caf->user_id==$user->id)
                {{($caf->documentos)}}
                @endif
                @endforeach
                </td>
                <td>
                    @foreach($calificacion as $caf)
                @if($caf->user_id==$user->id)
                {{($caf->score)/0.20}}
                @endif
                @endforeach
                </td>
            <td>
                @foreach($calificacion as $caf)
                @if($caf->user_id==$user->id)
                {{($caf->score)}}
                @endif
                @endforeach
            </td>


               
            <p hidden>{{$a=App\Postulante_submerito::where('user_id',$user->id)->first()}}</p>
                   
                        
                     <td>
                        
                       
                        @if(isset($a))
                        @if($a->publicado!="si")
                         <form action="{{ route('calif.publicar',$user->id) }}" style="display:inline-block;" method="POST">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                              <button class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para publicar la nota" type="submit" margin-left="50" onclick="return confirm('Está seguro que desea publicar las notas?')">
                                <i class="fa fa-cloud"></i>
                               </button>
                          </form>
                        <form action="{{route('calif.delete',$user)}}" method="POST" style="display:inline-block;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}                
                            <button class="btn btn-dark btn-sm ml-2 my-2" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar la nota"  type="submit" margin-left="50" onclick="return confirm('Está seguro que desea eliminar esta publicacion?')">
                                <i class="fa fa-trash-alt"></i>                                
                            </button> 
                        </form>
                        @else
                        <form action="{{ route('calif.quitar',$user->id) }}" style="display:inline-block;" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <button class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para quitar la publicacion de nota"type="submit" margin-left="50" onclick="return confirm('Está seguro que desea quitar la publicacion?')">
                              <i class="fa fa-times"></i>
                            </button>
                          </form>
                        @endif
                        @else
                        <a class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="Presiona para calificar a este postulante" href="{{route('crearCalif.create',$user)}}">
                            <i class="fa fa-check-square"></i>
                        </a>
                        
                       
                      @endif
                    </td>
                    @endif
                    @endforeach
                    @endforeach
                     </tr>
                
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection