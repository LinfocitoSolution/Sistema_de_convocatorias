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
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Archivo</th>
                <th>Fecha de creación</th>
             </tr>
            </thead>
            <tbody>
            @foreach($convocatorias as $convocatoria)
                <tr>
                    <td>{{$convocatoria->titulo_convocatoria}}</td>
                    <td>{{$convocatoria->descripcion}}</td>
                    <td><a href="call/{{$convocatoria->pdf_file}}" target="_blank" >{{$convocatoria->pdf_file}}</a></td>
                    <td>{{$convocatoria->created_at}}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('call.edit', $convocatoria) }}">
                            <i class="fa fa-edit"></i>
                        </a> &nbsp;
                        <form action="{{ route('call.destroy', $convocatoria->id) }}"
                              style="display:inline-block;"
                              method="POST">

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