@extends("admin.layouts.plantilladmin")

@section('title')
    Fechas
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h1>Fechas Importantes</h1>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="presiona para crear un area" href="{{route('fechas.create')}}">
                    Nuevo
                    <i class="fa fa-user-plus"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Eventos</th>
                        <th>Fechas</th>
                        <th>Ubicacion</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                       <!-- foreach($areas as $area)-->
                            <tr>
                                <td>Publicacion de convocatoria</td>
                                <td>jueves,16 de enero de 2020</td>
                                <td>En la pagina de convocatorias</td>                    
                                <td>
                                    <a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para editar un area"href="{{ route('fechas.edit') }}">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a> 
                                   <!--va dentro de action {route('area.destroy',$area->id)}}--->
                                    <form action="" method="POST" style="display:inline-block;">
                                       <!--- { csrf_field() }}                                                              
                                        { method_field('DELETE') }} -->                           
                                        <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar un area" type="submit" margin-left="50" onclick="">
                                            <i class="fa fa-trash-alt"></i>                                
                                        </button>                            
                                    </form>
                                </td>
                            </tr>
                       <!-- endforeach-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection