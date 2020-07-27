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
                        <th>Nombre postulante</th>
                       <th>Auxiliatura</th>
                        <th>Puntaje de meritos</th>
                        <th>Puntaje promediado Final</th>
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
                {{($caf->score)}}
                @endif
                @endforeach
                </td>
            <td>
                @foreach($calificacion as $caf)
                @if($caf->user_id==$user->id)
                {{($caf->score)*0.20}}
                @endif
                @endforeach
            </td>


               
                 
                
                        
                     <td>   <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona " href="{{route('crearCalif.create',$user)}}">
                            <i class="fa fa-check-square"></i>
                        </a>
                        
                        <form action="{{route('calif.delete',$user)}}" method="POST" style="display:inline-block;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}                
                            <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title=""  type="submit" margin-left="50" onclick="return confirm('Está seguro que desea eliminar esta publicacion?')">
                                <i class="fa fa-trash-alt"></i>                                
                            </button> 
                            
                                                       
                        </form>
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