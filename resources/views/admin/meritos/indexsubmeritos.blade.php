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
                <h1>Tabla de Sub-Méritos</h1>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="" href="#">
                    Nuevo
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
                    <tr>
                        <td>Promedio general de las materias cursadas (Incluye reprobadas y
                            abandonos)</td>
                        <td>35%</td>
                        
                        <td>
                        
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