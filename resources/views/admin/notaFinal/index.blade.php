@extends("admin.layouts.plantilladmin")
@section('title')
    Tabla de Reultados de resultados finales
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h1>Lista de  Notas Finales</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</>
                        <th>Nota final de Mérito</th>
                        <th>Nota Final de Conocimiento</th>
                        <th>Opciones</th>
                          
                     </tr>
                    </thead>
                    <tbody>
                        
                        
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Nota final de Mérito</td>
                        <td>Nota Final de Conocimiento</td>
                        
                        
                        <form action="#" style="display:inline-block;" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                           <td> <button class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para publicar la nota Final" type="submit" margin-left="50" onclick="return confirm('Está seguro de publicar la nota?')">
                                <i class="fa fa-cloud"></i>
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

                    
                    
                       