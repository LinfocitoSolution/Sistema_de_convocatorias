@extends("admin.layouts.plantilladmin")
@section('title')
    Tabla de Tematicas
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h3>Tabla de Tematicas</h3>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="presiona para crear un area" href="{{route('tematica.unidad')}}">
                    Nuevo
                    <i class="fa fa-table"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Tematica</th>
                        <th>Opciones</th>
                     </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>linux</td>
                        
                        <td>
                       
                        <form action="" method="POST" style="display:inline-block;">
                            {{ csrf_field() }}                                                              
                            {{ method_field('DELETE') }}                        
                            <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar la fecha?')">
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