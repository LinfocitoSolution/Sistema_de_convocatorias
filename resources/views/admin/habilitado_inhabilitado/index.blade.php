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
                        <th>Nombre de Auxiliatura</th>
                        <th>Código de la Auxiliatura</th>
                        <th>Habilitado/Inhabilitado</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                          
                     </tr>
                    </thead>
                <tbody>
                    @foreach($users as $user)
                    @foreach($user->requerimientos as $req )
                    
                    <tr>
                       
                    <td>{{$user->name}}</td>
                    <td>{{$user->lastname}}</td>

                    <td>{{$req->nombre_auxiliatura}}</td>
                    <td>{{$req->codigo_auxiliatura}}</td>
                    <td>{{$user->habilitados->first()->name}}</td>
                    <td>{{$user->habilitados->first()->description}}</td>
                    
                        <td><a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title=""href="{{route('documentos.indexdoc',$user->id)}}">
                          <i class="fa fa-folder"></i>
                      </a>

                    <form action="" method="POST" style="display:inline-block;">
                                                   
                                                       
                        </form>
                    
                    @endforeach
                    @endforeach
                     </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection