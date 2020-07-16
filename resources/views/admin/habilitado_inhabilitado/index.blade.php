@extends("admin.layouts.plantilladmin")
@section('title')
    Tabla de calificaciones
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h1>Lista de Postulantes Habilitados e Inhabilitados</h1>
                
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Código de la Auxiliatura</th>
                        <th>Habilitado/Inhabilitado</th>
                        <th>Opciones</th>
                          
                     </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>Fabiola</td>
                        <td>Bernal</td>
                        <td>LADMT</td>
                        <td>Habilitado</td>
                        <td><a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title=""href="#">
                          <i class="fa fa-folder"></i>
                      </a>

                    </tr>
                        <td>Brayan</td>
                        <td>Barreto Flores</td>
                        <td>ADMLAB</td>
                        <td>Inhabilitado</td>

                        <td><a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title=""href="#">
                          <i class="fa fa-folder"></i></a> 
                        <form action="" method="POST" style="display:inline-block;">                            
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