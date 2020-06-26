@extends("admin.layouts.plantilladmin")

@section('title')
    Unidad
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h1> Unidades</h1>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="presiona para crear una unidad" href="{{route('unidades.create')}}">
                    Nuevo
                    <i class="fa fa-user-plus"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($unidades as $unidad)
                            <tr>
                                
                                <td>{{$unidad->name}}</td>
                                <td>{{$unidad->description}}</td>                                                                          
                                <td>
                                    <a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para editar una unidad" href="{{route('unidades.edit', $unidad) }}">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a> 
                                    
                                    <form action="{{route('unidades.destroy',$unidad->id)}}" method="POST" style="display:inline-block;">
                                        {{ csrf_field() }}                                                                                                                     
                                        {{ method_field('DELETE') }}                                                                                                                                                
                                        <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar una unidad" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar la unidad?')" >
                                            <i class="fa fa-trash-alt"></i>                                
                                        </button>                            
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection