@extends("auth.plantillaLogForm")

@section("htmlheader_title")
  Notas Meritos
@endsection

@section("infoGeneral")

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-5"> 
           <!---cabeza--> 
           
            <div class="card-header text-white">
            <h2>Postulante: {{Auth::user()->name}} {{Auth::user()->lastname}}</h2>
              <h2>Auxiliatura: {{Auth::user()->requerimientos->first()->nombre_auxiliatura}}</h2>
            <h2>Nota Meritos: {{$postulante}}</h2>
            
          
          
          </div>
            

    </div>
</div>
</div>
</div>
@endsection