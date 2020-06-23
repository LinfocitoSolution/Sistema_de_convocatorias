@extends("admin.layouts.plantilladmin")

@section('title')
    Unidad
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-5">
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
                        <th>Descipcion</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                       <!-- foreach($unidades as $unidad)-->
                            <tr>
                                <!--{$unidad->name}}-->
                                <td>Departamento de Informatica y Sistemas</td>
                                <!--{$area->description}}-->
                                <td>Este departamento pertece a tecnologia</td>                                                                           <!--{route('unidades.edit', $unidad->id) }}-->
                                <td>
                                    <a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para editar una unidad" href="{{route('unidades.edit')}}">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a> 
                                    <!---{route('areas.destroy',$area->id)}}-->
                                    <form action="#" method="POST" style="display:inline-block;">
                                       <!-- { csrf_field() }}                                                                                                                     
                                        { method_field('DELETE') }}   -->         
                                                                                                                                                                               <!---onclick="return confirm('Está seguro de eliminar el area?')"-->
                                        <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar una unidad" type="submit" margin-left="50" >
                                            <i class="fa fa-trash-alt"></i>                                
                                        </button>                            
                                    </form>
                                </td>
                            </tr>
                        <!--endforeach-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection