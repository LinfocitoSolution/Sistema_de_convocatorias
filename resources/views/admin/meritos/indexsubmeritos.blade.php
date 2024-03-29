@extends("admin.layouts.plantilladmin")
@section('title')
    Tabla de Sub-Méritos
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
            <h2>Merito:{{$merito->name}}</h2>
            <h3>Tabla de Sub-Meritos</h3>
            
                
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="Presione para crear un nuevo submérito" href="{{ route('submerito.create',$merito)}}">
                    Nuevo Submerito
                    <i class="fa fa-table"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        
                        <th>Nombre de sub-mérito</th>
                        <th>Puntaje</th>
                        <th>Opciones</th>
                     </tr>
                    </thead>
                <tbody>
                    @foreach($submeritos as $submerito)
                    @if($submerito->merito_id==$merito->id)
                    <tr>
                    <td>{{$submerito->name}}</td>
                    <td>{{$submerito->score}}</td>
                        
                        <td><a class="btn btn-dark btn-sm ml-2 my-1" data-toggle="tooltip" data-trigger="hover" title="Presiona para ver descripciones" href="{{ route('descripcion.index',$submerito)}}">
                            <i class="fa fa-eye"></i>
                        </a> 
                        <a class="btn btn-dark btn-sm ml-2 my-1" data-toggle="tooltip" data-trigger="hover" title="Crear descripciones"href="{{route('descripcion.create',$submerito)}}">
                            <i class="far fa-plus-square"></i>
                        </a> 
                        <form action="{{route('submerito.destroy', $submerito->id)}}" method="POST" style="display:inline-block;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}                
                            <button class="btn btn-dark btn-sm ml-2 my-1" data-toggle="tooltip" data-trigger="hover" title="Eliminar submeritos"  type="submit" margin-left="50" onclick="return confirm('Está seguro que desea eliminar este submerito?')">
                                <i class="fa fa-trash-alt"></i>                                
                            </button> 
                            
                                                       
                        </form>
                        @endif
                        @endforeach
                    </td>
                    
                     </tr>
                
                    </tbody>
                </table>
            
                
                <div class="form-actions text-center mt-5">
                   <a class="btn btn-outline-dark center-block" href="{{route('merito.index')}}">Atrás</a>
                </div>
            </div>
            
                            
        </div>
    </div>  
</div>
@endsection