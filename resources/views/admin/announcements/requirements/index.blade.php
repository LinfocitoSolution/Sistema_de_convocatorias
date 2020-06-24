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
            
                            <form action="{{}}"
                              style="display:inline-block;"
                              method="POST">

                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                              @forelse ($user->roles as $item)
                                @if ($item->name == 'Requerimiento')
                                  <button class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para eliminar requerimiento" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar el requerimiento?')">
                                    <i class="fa fa-trash-alt"></i>
                                  </button>

                                  
                                @else
                                    @if ($item->name != 'Admin')                                
                                        <button class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para eliminar usuario" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar el requerimiento?')">
                                          <i class="fa fa-trash-alt"></i>
                                        </button>

                                        <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para observar al usuario" href="{{}}">
                                          <i class="fa fa-eye"></i>
                                        </a>

                                        <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para editar usuario" href="{{}}">
                                          <i class="fa fa-edit"></i>
                                        </a>
                                    @endif
                                @endif
                              @empty
                                  <button class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para eliminar usuario" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar el requerimiento?')">
                                    <i class="fa fa-trash-alt"></i>
                                  </button>

                                  <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="No disponible por el momento" href="{{}}">
                                    <i class="fa fa-eye"></i>
                                  </a>

                                  <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para editar requerimiento" href="{{}}">
                                    <i class="fa fa-edit"></i>
                                  </a>
                              @endforelse                              
                          </form>
                        </td>
                      </tr> 
                @endif
            </tbody>
           </table>
         </div>
      </div>   
   </div>
</div>
@endsection