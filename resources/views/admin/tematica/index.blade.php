@extends("admin.layouts.plantilladmin")
@section('title')
    Tabla de Tematicas
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h3>Tabla de Tematicas</h3>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="presiona para crear un area" href="{{route('tematica.unidad')}}">
                    Nuevo
                    <i class="fa fa-table"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Temáticas de</th>
                        <th>Opciones</th>
                     </tr>
                    </thead>
                <tbody>

                    @foreach ($callsLab as $call)
                        <tr>
                            <p hidden> {{$aux = $call->requerimientos->first()->tematicas->first()}} </p>
                            @if (isset($aux))
                                <td>{{$call->titulo_convocatoria}}</td>
                                <td>
                                    <form action="{{route('tematica.destroy',$call)}}" method="POST" style="display:inline-block;">
                                        {{ csrf_field() }}                                                              
                                        {{ method_field('DELETE') }}       
                                        @if ($call->publicado == 'no')
                                            <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar las temáticas?')">
                                                <i class="fa fa-trash-alt"></i>                                
                                            </button>                            
                                        @endif                 
                                    </form>
                                </td>
                            @endif
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection