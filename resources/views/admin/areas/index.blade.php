@extends("admin.layouts.plantilladmin")

@section('title')
    Fecha
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h1> Areas</h1>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="presiona para crear un area" href="{{route('area.create')}}">
                    Nuevo
                    <i class="fa fa-user-plus"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descipcion</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($areas as $area)
                            <tr>
                                <td>{{$area->name}}</td>
                                <td>{{$area->description}}</td>                    
                                <td>
                                    <a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para editar un area"href="{{ route('area.edit', $area) }}">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a> 
                                    <form action="{{route('area.destroy',$area->id)}}" method="POST" style="display:inline-block;">
                                        {{ csrf_field() }}                                                              
                                        {{ method_field('DELETE') }}                            
                                        <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar un area" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar el area?')">
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