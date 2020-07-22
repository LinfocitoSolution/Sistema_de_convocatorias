@extends("admin.layouts.plantilladmin")
@section('title')
    Tabla de Méritos
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h1>Tabla de Méritos</h1>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="" href="{{route('merito-crear.create')}}">
                    Nuevo
                    <i class="fa fa-table"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nombre de mérito</th>
                        <th>Puntaje</th>
                        <th>Opciones</th>
                     </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td> RENDIMIENTO ACADÉMICO </td>
                        <td>65</td>
                        
                        <td><a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="Crear sub-méritos"href="{{ route('sub-Merito.submerito')}}">
                            <i class="far fa-plus-square"></i>
                        </a> 
                        
                        <form action="#" method="POST" style="display:inline-block;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}                
                            <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="Eliminar Méritos"  type="submit" margin-left="50" onclick="return confirm('Está seguro que desea ocultar esta publicacion?')">
                                <i class="fa fa-trash-alt"></i>                                
                            </button> 
                                                       
                        </form>
                    </td>
                     </tr>
                
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection