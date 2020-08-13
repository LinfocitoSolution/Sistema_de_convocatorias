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
                <h5>{{(Auth::user()->unit_id != null) ? App\Unidad::find(Auth::user()->unit_id)->name : ''}}</h5>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" data-placement="right" href="{{route('libro.create')}}">
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
                        @foreach($libros as $libro)
                            @foreach ($postulantes as $post) 
                            @if (Auth::user()->unit_id == $post->requerimientos->first()->convocatorias->first()->unit_id || Auth::user()->roles->first()->name == 'Admin')
                                @if ($post->id == $libro->user_id)
                                    <tr> 
                                    <td>{{$post->name}} {{$post->lastname}}</td>
                                    <td>{{$libro->documento}}</td>
                                    <td>{{$libro->fecha_entrega}}</td>
                                    <!-- NO PERMITE MODIFICAR SI LOS POSTULANTES YA HAN SIDO CALIFICADOS -->
                                    @if (!App\Calificacion_conocimiento::where('user_id', '=',$post->id )->exists())
                                        <td>   
                                            <form action="{{route('libro.delete',$libro)}}" method="POST" style="display:inline-block;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}             
                                                <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip"  data-trigger="hover" title="Elimina al postulante"  type="submit" margin-left="50" onclick="return confirm('Está seguro que desea eliminar esta recepcion?')">
                                                <i class="fa fa-trash-alt"></i>                                
                                                </button> 
                                            </form>
                                        </td>
                                    @endif
                                    </tr>
                                @endif
                            @endif
                            @endforeach
                        @endforeach                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection