@extends("admin.layouts.plantilladmin")

@section('title')
    Convocatorias
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
  <div class="container">   
    <div class="card mt-5" >
      <div class="card-header">
        <h1> Convocatorias</h1> 
      </div>
      <div class="card-body">
         <table class="table table-bordered table-striped table-sm">
            <thead>
             <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Archivo</th>
                <th>Fecha de creación</th>
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
                        <a class="btn btn-info btn-sm" href="{{ route('call.edit', $call) }}">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ route('call.destroy', $call->id) }}" style="display:inline-block;" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar la convocatoria?')">
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