@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  Usted esta habilitado
@endsection

@section("infoGeneral")

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-5"> 
           <!---cabeza--> 
           @if(Auth::user()->habilitados->first()->publicado=="si")
            <div class="card-header text-white">
             
            <h2>Usted esta {{Auth::user()->habilitados->first()->name}}</h2>
            </div>
            @if(Auth::user()->habilitados->first()->name=="deshabilitado")
            <div class="card-body">
                <div class="input-group">
                         
                <div class="input-group-prepend">
                 <span class="input-group-text text-white">Descripcion</span>
                </div>
              <textarea class="form-control" name="descripcion" value="" id="descripcion" disabled>{{Auth::user()->habilitados->first()->description}}</textarea>
            </div>
        </div>
            @endif
            @else
            <div class="card-header text-white">
             
              <h2>El resultado de la entrega de documentos aun no fue publicado</h2>
              </div>
            @endif

    </div>
</div>
</div>
</div>
@endsection