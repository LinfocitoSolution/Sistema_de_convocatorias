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
                <th>Tipo de convocatoria</th>
             <!--   <th>Archivo</th> -->
                <th>Gestión</th>
                <th>Unidad</th>
                
                <th>Opciones</th>
             </tr>
            </thead>
            <tbody>
            @foreach($calls as $call)
                <tr>
                    <td>{{$call->titulo_convocatoria}}</td>
                    <td>{{$call->tipo_convocatoria}}</td>
                   <!-- <td><a href="call/{{$call->pdf_file}}" target="_blank" >{{$call->pdf_file}}</a></td> -->
                    <td>{{$call->gestion}}</td>
                    
                    <td>{{App\Unidad::find($call->unit_id)->name}}</td>
                    
                  
                    <td>
                      @if($call->tipo_convocatoria=='convocatoria de docencia')
                        <a class="btn btn-dark btn-sm mt-1 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para editar una convocatoria" href="{{ route('call.editardoc', $call) }}">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                      @elseif($call->tipo_convocatoria=='convocatoria de laboratorios')
                      <a class="btn btn-dark btn-sm mt-1 ml-2" data-toggle="tooltip" data-trigger="hover" title="presiona para editar una convocatoria" href="{{ route('call.edit', $call) }}">
                        <i class="fa fa-pencil-alt"></i>
                      </a>
                      @endif
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