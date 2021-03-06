
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
                <th><strong>Mérito:{{$merito->name}}</strong></th>
                
              </tr>
              <tr><th><strong>Puntaje Límite:{{$merito->score}}</strong></th></tr>
              <tr> 
               
                
              </tr>
              @foreach($submeritos as $submerito)
              @if($submerito->merito_id==$merito->id)
              <tr>
                  
                  <th>Submerito:{{$submerito->name}}</th></tr>

                  <tr><th>Puntaje Límite:{{$submerito->score}}</th>
              </tr>
               <tr>
                  <th>Descripción</th>   
                  <th>Puntaje</th>
                  <th>Nro documentos</th>
               </tr>
                  @foreach($descripciones as $desc)
                  @if($desc->submerito_id==$submerito->id)
                <td>{{$desc->descripcion}}</td>
                 @if($desc->tipo_descripcion=="promedio")
                  <td> 
                    <div style="width:4em">
                        <input class="form-control" type="number" id="nota" name="notas[]" value="0" required min ="0" max=<?php echo $submerito->score ?>>
                    </div>
                    <div class="invalid-feedback {{ $errors->has('notas')? 'd-block' : '' }}">
                      {{ $errors->has('notas')? $errors->first('notas') : ''  }}
                  </div>
                  </td>
                  
                  @else
                  <td></td>
                  <td> 
                    <div style="width:4em">
                        <input class="form-control" type="number"  id="doc" name="doc[]" value="0" required min="0" max=<?php echo ($submerito->score)/$desc->score ?> >
                    </div>
                    <div class="invalid-feedback {{ $errors->has('doc')? 'd-block' : '' }}">
                      {{ $errors->has('doc')? $errors->first('doc') : ''  }}
                    </div>
                  </td>
                  
                 @endif
                </tr>
                
                @endif
                @endforeach
              @endif
              @endforeach
              @endif
              @endforeach
         </tbody>
      </table>
   </div>
    </div>
     