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
                <h1>Tabla de calificaciones</h1>
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
                        <th>Tematica</th>
                        <th>Código de la Auxiliatura</th>
                        <th>Calificación</th>
                     </tr>
                    </thead>
                <tbody>
                 @foreach($conocimientoCalif as $fecha)  
                     <tr>
                  <!--<td>{{$tabla_de_calificaciones->id}}</td>
                  <td>{{$tabla_de_calificaciones->item}}</td>          
                  <td>{{$tabla_de_calificaciones->tematica}}</td>
                  <td>{{$tabla_de_calificaciones->codigo_auxiliatura}}
                  <td>{{$tabla_de_calificaciones->calificación}}</td> -->                  
                                <td>
                                    <a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para editar una fecha"href="{{route('conocimientoCalif.edit',$fecha)}}">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a> 
                                   
                                    <form action="{{route('conocimientoCalif.destroy',$conocimientoCalif->id)}}" method="POST" style="display:inline-block;">
                                        {{ csrf_field() }}                                                              
                                        {{ method_field('DELETE') }}                        
                                        <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar una fecha" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar  la fila de la tabla?')">
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