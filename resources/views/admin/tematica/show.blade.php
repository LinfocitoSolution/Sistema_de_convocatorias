@extends('admin.layouts.plantilladmin')

@section('htmlheader_title')
    show_tematica
@endsection


@section('content')
<div class="content-wrapper">
 <div class="container">
    <div class="card mt-5" >
        <!--CABEZA-->
           <div class="card-header">
     <!-----User { $user->id }}----->
            
                <h2>Temática </h2>
                  <h3>{{$call->titulo_convocatoria}} </h3>
                            
          </div> 

        <!---FIN CABEZA-->
        <!---INICIO CUERPO-->  
             <div class="card-body">
                <div class="col-md-6 table-responsive">
                  <table class="table table-bordered table-striped table-hover">
                    <tbody>
                       @foreach ($tematicas as $tem)
                        @foreach ($tem->requerimientos as $req)
                         <tr>
                          @if ($call->requerimientos->first()->id==$req->id)
                              <td>{{$tem->name}}</td>
                            
                          @endif
                         </tr> 
                        @endforeach
                        
                       @endforeach 
                       
                       
                    </tbody>
                  </table>
                </div> 
            </div>
        
         <!---FIN DE CUERPO--->
         <!----INICIO DE PIE-->   
            <div class="card-footer">
                   <div class="text-center">
                      <a class="btn btn-dark" data-toggle="tooltip" data-placement="right" title="Presiona el botón para volver a la tabla temática" href="{{route('tematica.index')}}"><i class="fa fa-arrow-left mr-2"></i>Atrás</a>
                   </div>
                
            </div>
            <!---FIN DE PIE-->
                
               

            </div>
        </div>
    </div>
         
@endsection