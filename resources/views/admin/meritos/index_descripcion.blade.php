@extends("admin.layouts.plantilladmin")
@section('title')
    Descripción
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h2>Submerito:{{$submerito->name}}</h2>
                <h4>Tabla de Descripciones</h4>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="Presione para crear una nueva  descripción de puntos" href="{{route('descripcion.create',$submerito)}}">
                    Nueva Descripción
                    <i class="fa fa-table"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Tipo de Descripcion</th>
                        <th>Puntaje</th>
                        <th>Opciones</th>
                        
                    </tr>
                    </thead>
                <tbody>
                    @foreach($descripcion as $desc)
                    @if($desc->submerito_id==$submerito->id)
                    <tr>
                    <td>{{$desc->descripcion}}</td>
                    <td>{{$desc->tipo_descripcion}}</td>
                    <td>{{$desc->score}}</td>
                    <td> <form action="{{route("descripcion.destroy" , $desc->id)}}" method="POST" style="display:inline-block;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}                
                        <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="Eliminar Descripción"  type="submit" margin-left="50" onclick="return confirm('Está seguro que desea eliminar esta Descripción?')">
                            <i class="fa fa-trash-alt"></i>                                
                        </button> 
                        
                                                   
                    </form></td>
                    @endif
                    @endforeach 
                </td> 
                    </tr>
                
                    </tbody>
                </table>
                 <div class="form-actions text-center mt-5">
                 <p hidden>{{$merito=App\Merito::where('id',$submerito->merito_id)->first()}}</p>
                    <a class="btn btn-outline-dark center-block" href="{{ route("subMerito.indexsubmerito" , $merito) }}">Atrás</a>
                 </div>
                
                
            </div>
            
                            
        </div>
    </div>  
</div>
@endsection