
        <h6 class="text-center"><b>{{$user->name}} {{$user->lastname}}</b></h6>
        
        <h6 class="text-center"><b>{{$user->requerimientos->first()->convocatorias->first()->titulo_convocatoria}}</b></h6>
        <div class="form-horizontal">
    
        <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm">
                <thead>
                
          </thead>
          <tbody>
            @foreach($meritos as $merito)
            @if($user->requerimientos->first()->convocatorias->first()->id==$merito->convocatoria_id)  
            <tr>
                <th><strong>Merito:{{$merito->name}}</strong></th>
                <th><strong>Puntaje Limite:{{$merito->score}}</strong></th>
              </tr>
              <tr> 
                <th>Sub-merito</th>
                <th>Descripción</th>
                <th>Puntaje</th>
                <th>Nro documentos</th>
              </tr>
              @foreach($submeritos as $submerito)
              @if($submerito->merito_id==$merito->id)
              <tr>
                  
                  <td>{{$submerito->name}}</td>

                  <td>{{$submerito->description}}</td>

                  <td> 
                    <div style="width:4em">
                        <input class="form-control" type="number" id="nota" name="notas[]" value="0">
                    </div>
                  </td>

                  <td> 
                    <div style="width:4em">
                        <input class="form-control" type="number" id="doc" name="doc[]" value="0">
                    </div>
                  </td>
              
              
                </tr>
              @endif
              @endforeach
              @endif
              @endforeach
         </tbody>
      </table>
   </div>
    </div>
     