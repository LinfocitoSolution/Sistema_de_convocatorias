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
                        <th>Item</th>
                        <th>Evento</th>
                        <th>Fecha</th>
                        <th>Ubicacion</th>
                        <th>Opciones</th>
                     </tr>
                    </thead>
                <tbody>
                 @foreach($fechas as $fecha)  
                     <tr>
                  <td>{{$fecha->id}}</td>
                  <td>{{$fecha->evento}}</td>          
                  <td>{{$fecha->fecha}}</td>
                  <td>{{$fecha->ubicacion}}</td>                   
                                <td>
                                    <a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para editar una fecha"href="{{route('fechas.edit',$fecha)}}">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a> 
                                   
                                    <form action="{{route('fechas.destroy',$fecha->id)}}" method="POST" style="display:inline-block;">
                                        {{ csrf_field() }}                                                              
                                        {{ method_field('DELETE') }}                        
                                        <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar una fecha" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar la fecha?')">
                                            <i class="fa fa-trash-alt"></i>                                
                                        </button>                            
                                    </form>
                                </td>
                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection