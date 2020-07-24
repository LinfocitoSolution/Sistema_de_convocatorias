@extends("admin.layouts.plantilladmin")
@section('title')
    Tabla de Méritos
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h1>Tabla de Méritos</h1>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="" href="{{route('merito.create')}}">
                    Nuevo Merito
                    <i class="fa fa-table"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Convocatoria</th>
                        <th>Nombre de mérito</th>
                        <th>Puntaje</th>
                        <th>Opciones</th>
                     </tr>
                    </thead>
                <tbody>
                    @foreach($meritos as $merito)
                    <tr>
                        <td>{{App\Convocatoria::find($merito->convocatoria_id)->titulo_convocatoria}}</td>
                        <td> {{$merito->name}} </td>
                        <td>{{$merito->score}}</td>
                        
                        <td><a class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="Crear sub-méritos"href="{{ route('submerito.create',$merito)}}">
                            <i class="far fa-plus-square"></i>
                        </a> 
                        
                        <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para ver sub-meritos" href="{{ route('subMerito.indexsubmerito',$merito)}}">
                            <i class="fa fa-eye"></i>
                        </a>
                        
                        <form action="{{ route('merito.destroy', $merito->id) }}" method="POST" style="display:inline-block;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}                
                            <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="Eliminar Méritos"  type="submit" margin-left="50" onclick="return confirm('Está seguro que desea eliminar este merito?')">
                                <i class="fa fa-trash-alt"></i>                                
                            </button> 
                            
                                                       
                        </form>
                        @endforeach
                        
                        
                    </td>
                     </tr>
                
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection