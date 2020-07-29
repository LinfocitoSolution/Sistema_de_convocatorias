@extends("admin.layouts.plantilladmin")

@section('title')
    Segundo paso-tabla de calificación
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                       <!---cabeza--> 
                       <div class="card-header text-white">
                        <h2>Convocatorias de laboratorio:</h2>
                    </div>
                   <!---cuerpo--->
                   <div class="card-body">
                       <form class="form-group" method="get" action="{{route('conocimientoCalif.create')}}" >
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <div class="form-group-row">
                             <!----Laboratorio---->
                               <div class="col-mb-5 mb-3">
                                   {{-- <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Puede seleccionar uno o mas permisos"> --}}
                                     <label class="input-group-text text-white" for="">Seleccione la Convocatoria:</label>                         
                                     <select  class="custom-select form-control" type="text" name="convoca" > 
                                      
                                      @foreach ($reqsLab as $item)
                                        @foreach($convocatoria as $call)  
                                            @if($call->tipo_convocatoria == 'convocatoria de laboratorios') <!-- PERMITE CONVOCATORIAS NO PUBLICADAS -->
                                              @if (!App\Tematica_requerimiento::where('convocatoria_id', '=', $call->id)->exists())) <!-- CONVOCATORIA QUE NO SE HAYA REGISTRADO TABLAS -->
                                                {{-- @if ($item->requerimiento_id == $call->requerimientos()->first()->id)) <!-- CONVOCATORIA QUE TIENE REGISTRADA TEMATICAS-->  --}}
                                                  <option class="text-dark" value="{{$call->id}}">{{$call->titulo_convocatoria}}</option>   
                                                {{-- @else --}}
                                                <!-- DEBERIA MOSTRAR UN MENSAJE QUE NO EXISTEN TEMATICAS REGISTRADAS PARA SU CONVOCATORIA -->   
                                                {{-- @endif --}}
                                              @else
                                                <!-- DEBERIA MOSTRAR UN MENSAJE QUE SU CONVOCATORIA YA TIENE UNA TABLA REGISTRADA -->
                                              @endif
                                            @endif
                                           @endforeach
                                      @endforeach
                                     </select>
                                   {{-- </div> --}}
                                 </div>
                             </div>
                             <div class="form-actions text-center">
                                 <a class="btn btn-outline-dark px-4" href="{{route('calif.primero')}}" data-toggle="tooltip" data-placement="left" title="Presione para volver al anterior paso">Atras</a>  
                                 {{-- @if (App\Tematica_requerimiento::where('convocatoria_id', '=', $convocatoria->first()->id)->exists())) --}}
                                    <button class="btn btn-outline-dark" type="submit" data-toggle="tooltip" data-placement="right" title="Presione para avanzar al formulario de rótulo">Siguiente</button>
                                 {{-- @endif --}}
                             </div> 
                         </form> 
                    </div>  
                 </div>
             </div>
            <!-- /.col-->
        </div>
    </div>
 </div>
  <!-- /.content-wrapper -->

@endsection