@extends("admin.layouts.plantilladmin")

@section('title')
    Requerimientos
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
  <div class="container">   
    <div class="card mt-5" >
      <div class="card-header">
        <h1>Requerimientos</h1> 
            <a class="btn btn-dark" data-toggle="tooltip" data-trigger="hover" title="presiona para crear un usuario"href="{{route('usuarios.create')}}">
              Nuevo 
              <i class="fa fa-user-plus"></i>&nbsp;
            </a>
      </div>
      <div class="card-body">
         <table class="table table-bordered table-striped table-sm">
            <thead>
             <tr>
                <th>Intem</th>
                <th>Cantidad de Auxiliares</th>
                <th>Horas Académicas</th>
                <th>Nombre de Auxiliatura</th>
                <th>Código de la Auxiliatura</th>
                <th>Opciones</th>
             </tr>
            </thead>
            <tbody>
                             <form action=""
                              style="display:inline-block;"
                              method="POST">

                           
                                          <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para observar al usuario" href="">
                                          <i class="fa fa-eye"></i>
                                        </a>

                                        <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para editar usuario" href="">
                                          <i class="fa fa-edit"></i>
                                        </a>
                                    
                               
                                                           
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