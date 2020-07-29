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
                <h1>Descripción</h1>
            <h1>Submerito:{{$submerito->name}}</h1>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="" href="{{route('descripcion.create',$submerito)}}">
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
                        <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="Eliminar Méritos"  type="submit" margin-left="50" onclick="return confirm('Está seguro que desea eliminar este merito?')">
                            <i class="fa fa-trash-alt"></i>                                
                        </button> 
                        
                                                   
                    </form></td>
                    @endif
                    @endforeach 
                </td> 
                    </tr>
                
                    </tbody>
                </table>
            
                <a class="btn btn-outline-dark center-block" href="{{ url()->previous() }}">Atras</a>
                
                
                
            </div>
            
                            
        </div>
    </div>  
</div>
@endsection