@extends("admin.layouts.plantilladmin")

@section('title')
    Convocatorias
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">   
       <div class="card mt-2" >
         <div class="card-header">
             <h1> Convocatorias</h1> 
            
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="presiona para crear una convocatoria" href="{{ route('call.create')}}">
                   Nuevo
                    <i class="fa fa-user-plus"></i>
               </a>
      
         </div>
        
        <div class="card-body">
          <h5>Filtro de Gestiones:</h5>
          <div class="dropdown" ><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >Gestiones</button>
            <a href="{{route('call.index')}}"> <button  class="btn btn-dark" >Todos</button> </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($gestiones as $gestion)
            <a class="dropdown-item" href="{{route('call.index',['gestion'=>$gestion])}}">{{$gestion}}</a><br>
             @endforeach
             
            </div>
          </div>
          <h6 class="text-danger mt-1 mb-2"><b>Nota:</b> Recuerde crear sus tablas de calificacion una vez creada la convocatoria, sino la convocatoria no puede ser publicada</h6> 
         <table class="table table-bordered table-striped table-sm">
            <thead>
             <tr>
                <th>Título</th>
                <th>Tipo de convocatoria</th>
             <!--   <th>Archivo</th> -->
                <th>Gestión</th>
                <th>Unidad</th>
                
                <th>Opciones</th>
             </tr>
            </thead>
            <tbody>
            @foreach($calls as $call)
                <tr>
                    <td>{{$call->titulo_convocatoria}}</td>
                    <td>{{$call->tipo_convocatoria}}</td>
                   <!-- <td><a href="call/{{$call->pdf_file}}" target="_blank" >{{$call->pdf_file}}</a></td> -->
                    <td>{{$call->gestion}}</td>
                    
                    <td>{{App\Unidad::find($call->unit_id)->name}}</td>
                    
                  
                    <td>
                         @if($call->publicado=="si")
                              <form action="{{ route('call.destroy', $call->id) }}" style="display:inline-block;" method="POST">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <button class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar una convocatoria"type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar la convocatoria?')">
                                    <i class="fa fa-trash-alt"></i>
                                  </button>
                             </form>
                            <form action="{{ route('call.quitar', $call->id) }}" style="display:inline-block;" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para quitar una una convocatoria publicada"type="submit" margin-left="50" onclick="return confirm('Está seguro que desea ocultar esta convocatoria?')">
                                  <i class="fa fa-times"></i>
                                </button>
                            </form>
                       @else
                          @if($call->tipo_convocatoria=='convocatoria de docencia')
                            <a class="btn btn-dark btn-sm mt-1 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para editar una convocatoria" href="{{ route('call.editardoc', $call) }}">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                          @elseif($call->tipo_convocatoria=='convocatoria de laboratorios')
                          <a class="btn btn-dark btn-sm mt-1 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para editar una convocatoria" href="{{ route('call.edit', $call) }}">
                            <i class="fa fa-pencil-alt"></i>
                          </a>
                          @endif
                            <form action="{{ route('call.destroy', $call->id) }}" style="display:inline-block;" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar una convocatoria"type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar la convocatoria?')">
                                  <i class="fa fa-trash-alt"></i>
                                </button>
                            </form>
                            <!-- SOLO SE PERMITEN PUBLICAR AQUELLAS QUE HAYAN REGISTRADO SUS TABLAS -->
                            @if (App\Tematica_requerimiento::where('convocatoria_id', '=',$call->id)->exists() && App\Merito::where('convocatoria_id', '=',$call->id)->exists() && $call->tipo_convocatoria == 'convocatoria de laboratorios')
                              <form action="{{ route('call.publicar', $call->id) }}" style="display:inline-block;" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para publicar una convocatoria"type="submit" margin-left="50" onclick="return confirm('Está seguro que desea publicar la convocatoria?')">
                                  <i class="fa fa-cloud"></i>
                                </button>
                              </form>
                            @endif

                            @if ($call->tipo_convocatoria == 'convocatoria de docencia' && App\Merito::where('convocatoria_id', '=',$call->id)->exists())
                              <form action="{{ route('call.publicar', $call->id) }}" style="display:inline-block;" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para publicar una convocatoria"type="submit" margin-left="50" onclick="return confirm('Está seguro que desea publicar la convocatoria?')">
                                  <i class="fa fa-cloud"></i>
                                </button>
                              </form>
                            @endif
                       @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
           </table>
           
          </div>
        </div>
      </div> 
    </div>   
   </div>
</div>
@endsection