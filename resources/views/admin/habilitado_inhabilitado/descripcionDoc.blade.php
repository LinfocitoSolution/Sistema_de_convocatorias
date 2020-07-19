@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  Usted por ahora no esta habilitado
@endsection

@section("infoGeneral")

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-5"> 
           <!---cabeza--> 
            <div class="card-header text-white">
              <h2>Usted por ahora no esta habilitado</h2>

            </div>
            <div class="card-body">
                <div class="input-group">
                         
                <div class="input-group-prepend">
                 <span class="input-group-text text-white">Descripcion Docencia</span>
                </div>
                <textarea class="form-control" name="descripcion" value="" id="descripcion"></textarea>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection