@extends("admin.layouts.plantilladmin")

@section('title')
    Tematica-convocatoria
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
 <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <h3>Convocatorias</h3>
                    </div>    
                    <div class="card-body">                     
                        <form class="form-horizontal" method="get" action="{{route('tematica.create')}}">                                                      
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                   
                           <div class="form-group-row">
                              <div class="col-mb-5 mb-3">
                                  <label class="input-group-text text-white" for="">Seleccione la Convocatoria:</label>                         
                                  <select  class="custom-select form-control" type="text" name="convoca" > 
                                      @foreach($convocatoria as $convo)
                                      <p hidden> {{$aux = $convo->requerimientos->first()->tematicas->first()}} </p>
                                        @if($convo->tipo_convocatoria == 'convocatoria de laboratorios' && isset($aux) == false)
                                          <option class="text-dark" value="{{$convo->id}}">{{$convo->titulo_convocatoria}}</option>
                                        @endif
                                      @endforeach
                                  </select>
                              </div>
                           </div>
                           <div class="form-actions text-center">
                            <a class="btn btn-outline-dark" href="{{route('tematica.unidad')}}">Atras</a>
                            <button class="btn btn-outline-dark" type="submit">Siguiente</button>
                           
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