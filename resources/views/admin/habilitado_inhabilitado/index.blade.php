@extends("admin.layouts.plantilladmin")

@section('title')
    Lista de Habilitados Inhabilitados
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
  <div class="container">   
    <div class="card mt-2" >
      <div class="card-header">
        <h1>Postulantes</h1> 
            
      </div>
      <div class="card-body">
         <table class="table table-bordered table-striped table-sm">
            <thead>
             <tr>
                <th>Nombre</th>
                <th>Apellido</th> 
                <th>Código de la Auxiliatura</th>
                <th>Habilitados/Inhabilitados
             </tr>
            </thead>
            <tbody>
              @foreach($requerimientos as $requerimiento)  
              <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->lastname}}</td>          
                  <td></td>
                  <td></td>                           
                   <td>      
                        
                        
                        <!--<form action="{{route('requerimientos.destroy',$requerimiento->id)}}" method="POST" style="display:inline-block;">
                          {{ csrf_field() }}                                                              
                          {{ method_field('DELETE') }}                            
                          <button class="btn btn-dark btn-sm mx-1 my-1" data-toggle="tooltip" data-trigger="hover" title="presiona para eliminar un area" type="submit" margin-left="50" onclick="return confirm('Está seguro de eliminar el area?')">
                              <i class="fa fa-trash-alt"></i>                                
                          </button>                            
                      </form>-->
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