@extends("admin.layouts.plantilladmin")

@section('title')
    Requerimientos
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
  <div class="container">   
    <div class="card mt-5" >
      <div class="card-header">
        <h1>Requerimientos</h1> 
            <a class="btn btn-dark" data-toggle="tooltip" data-trigger="hover" title="presiona para crear un requerimiento"href="{{route('requerimientos.create')}}">
              Nuevo 
              <i class="fa fa-book"></i>&nbsp;
            </a>
      </div>
      <div class="card-body">
         <table class="table table-bordered table-striped table-sm">
            <thead>
             <tr>
                <th>Item</th>
                <th>Nombre de Auxiliatura</th>
                <th>Código de la Auxiliatura</th>
                <th>Cantidad de Auxiliares</th>
                <th>Horas Académicas</th>
                <th>Opciones</th>
             </tr>
            </thead>
            <tbody>
              @foreach($requerimientos as $requerimiento)  
              <tr>
                  <td>{{$requerimiento->id}}</td>
                  <td>{{$requerimiento->nombre_auxiliatura}}</td>          
                  <td>{{$requerimiento->codigo_auxiliatura}}</td>
                  <td>{{$requerimiento->cantidad_de_auxiliares}}</td>         
                  <td>{{$requerimiento->cantidad_horas_academicas}}</td>                  
                   <td>      
                        
                        <a class="btn btn-dark btn-sm" data-toggle="tooltip" data-trigger="hover" title="Presiona para editar requerimiento" href="{{route('requerimientos.edit',$requerimiento)}}">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{route('requerimientos.destroy',$requerimiento->id)}}" method="POST" style="display:inline-block;">
                          {{ csrf_field() }}                                                              
                          {{ method_field('DELETE') }}                            
                          <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar un area" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar el area?')">
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