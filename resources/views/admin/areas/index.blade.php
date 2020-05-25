@extends("admin.layouts.plantilladmin")

@section('title')
    Crear-area
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-5">
            <div class="card-header">
                <h1> Areas</h1>
                <a class="btn btn-success px2" href="{{route('areas.create')}}">
                    Nuevo
                    <i class="fa fa-user-plus"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descipcion</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($areas as $area)
                            <tr>
                                <td>{{$area->name}}</td>
                                <td>{{$area->description}}</td>                    
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('areas.edit', $area->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a> &nbsp;
                                    <form action="{{route('areas.destroy',$area->id)}}" method="POST" style="display:inline-block;">
                                        {{ csrf_field() }}                                                              
                                        {{ method_field('DELETE') }}                            
                                        <button class="btn btn-danger btn-sm" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar el area?')">
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