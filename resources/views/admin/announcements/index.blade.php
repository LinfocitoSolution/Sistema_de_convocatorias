@extends("admin.layouts.plantilladmin")

@section('title')
    Convocatorias
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">   
       <div class="card mt-2" >
        <div class="card-header">
        <h1> Convocatorias</h1> 
        <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="presiona para crear una convocatoria" href="{{ route('call.create')}}">
          Nuevo
          <i class="fa fa-user-plus"></i>
      </a>
        </div>
        <div class="card-body">
         <table class="table table-bordered table-striped table-sm">
            <thead>
             <tr>
                <th>Título</th>
                <th>Descripción</th>
             <!--   <th>Archivo</th> -->
                <th>Fecha de creación</th>
                <th>Opciones</th>
             </tr>
            </thead>
            <tbody>
            @foreach($calls as $call)
                <tr>
                    <td>{{$call->titulo_convocatoria}}</td>
                    <td>{{$call->descripcion}}</td>
                    <td><a href="call/{{$call->pdf_file}}" target="_blank" >{{$call->pdf_file}}</a></td>
                    <td>{{$call->created_at}}</td>
                    <td>
                        <a class="btn btn-dark btn-sm mt-1 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para editar una convocatoria"href="{{ route('call.edit', $call) }}">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('call.destroy', $call->id) }}" style="display:inline-block;" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-dark btn-sm mt-2 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar una convocatoria"type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar la convocatoria?')">
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
   </div>
</div>
@endsection