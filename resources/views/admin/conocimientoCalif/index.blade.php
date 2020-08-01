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
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="presiona para crear un area" href="{{route('calif.primero')}}">
                    Nuevo
                    <i class="fa fa-table"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Unidad</th>
                        <th>Convocatoria</th>
                        <th>Opciones</th>
                     </tr>
                    </thead>
                <tbody>
                    @foreach ($tablas as $item)
                        @foreach ($calls as $call)
                            <tr>
                                @if ($item->convocatoria_id == $call->id)
                                    <td>{{App\Unidad::where('id', '=', $call->unit_id )->first()->name}}</td>
                                    <td>{{$call->titulo_convocatoria}}</td>
                                    <td>
                                    <form action="{{ route('tabla.destroy',$item->convocatoria_id)}}" method="POST" style="display:inline-block;">
                                            {{ csrf_field() }}                                                              
                                            {{ method_field('DELETE') }}            
                                            @if($call->publicado == 'no')            
                                                <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar una fecha" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar la tabla?')">
                                                    <i class="fa fa-trash-alt"></i>                                
                                                </button>                            
                                            @endif
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection