@extends("admin.layouts.plantilladmin")
@section('title')
    Libro de Recepcion
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h4>Libro de recepcion de postulaciones</h4>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="" href="{{route('libro.create')}}">
                    Registrar recepcion
                    <i class="fa fa-table ml-2"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                            <th>Nombre postulante</th>
                            <th>Nro. Documentos</th>
                            <th>Hora de registro</th>
                            <th>Opciones</th>
                      </tr>
                    </thead>
                    <tbody>  
                       <tr> 
                         <td>Pepito Grillo</td>
                         <td>20</td>
                          <td>14:00</td>
                 
                
                        
                          <td>   
                             <form action="#" method="POST" style="display:inline-block;">
                              <!----{ csrf_field() }}
                               { method_field('DELETE') }}  -->              
                               <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title=""  type="submit" margin-left="50" onclick="return confirm('Está seguro que desea eliminar esta publicacion?')">
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