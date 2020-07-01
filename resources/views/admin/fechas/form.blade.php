<div class="form-row">

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="name">Evento</label>
        <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
            <span class="input-group-append">
                <button class="btn btn-dark" type="button">E</button>
            </span>
            <input
                    class="form-control"
                    name="evento"
                    placeholder="Ingrese Evento" type="text" value="{{ old('evento', isset($fecha) ? $fecha->evento : '') }}">
                    
        </div>
    </div>
   <div class="invalid-feedback { $errors->has('evento')? 'd-block' : '' }}">
        {{ $errors->has('evento')? $errors->first('evento') : ''}}
     </div>
  
  
     <!--Fecha inicial-->
    <div class="col-md-6">
        <label for="fecha">Fecha Inicial</label>
        <input type="datetime-local" name="fecha" class="form-control" id="fecha" placeholder="Ingrese fecha" value="{{ old('fecha', isset($fecha) ? $fecha->fecha : '') }}">
      <div class="invalid-feedback">
        Fecha invalida
      </div>
    </div>
    <div class="invalid-feedback {{ $errors->has('fecha')? 'd-block' : '' }}">
      {{ $errors->has('fecha')? $errors->first('fecha') : ''  }}
   </div>
    <!--Fecha Fin-->
    <div class="col-md-6">
      <label for="fecha">Fecha Final</label>
      <input type="datetime-local" name="fecha final" class="form-control" id="fecha" placeholder="Ingrese fecha" value="{{ old('fecha', isset($fecha) ? $fecha->fecha : '') }}">
    <div class="invalid-feedback">
      Fecha invalida
    </div>
  </div>
  <div class="invalid-feedback {{ $errors->has('fecha')? 'd-block' : '' }}">
    {{ $errors->has('fecha')? $errors->first('fecha') : ''  }}
 </div>

     <!----ubicacion-->
     <div class="col-md-12 mb-3">
           <label class="col-form-label" for="ubicacion">Ubicacion</label>
        <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
           <span class="input-group-append">
              <button class="btn btn-dark" type="button">F</button>
           </span>
        
           <input
               class="form-control"
               name="ubicacion"
               placeholder="Ingrese una una ubicacion" type="text" value="{{ old('ubicacion', isset($fecha) ? $fecha->ubicacion : '') }}"> 
              
       </div>
    </div>
<div class="invalid-feedback {{ $errors->has('ubicacion')? 'd-block' : '' }}">
    {{ $errors->has('ubicacion')? $errors->first('ubicacion') : ''  }}
 </div>
</div>