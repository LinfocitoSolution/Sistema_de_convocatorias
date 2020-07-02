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
   <div class="invalid-feedback {{ $errors->has('evento')? 'd-block' : '' }}">
        {{ $errors->has('evento')? $errors->first('evento') : ''}}
     </div>
  
  
     <!--Fecha inicial-->
    <div class="col-md-6">
        <label for="fechaI">Fecha Inicial</label>
        <input type="datetime-local" name="fechaI" class="form-control" id="fechaI" placeholder="Ingrese fecha inicial" value="{{old('fechaI', date("Y-m-d\TH:i"), isset($fecha) ? $fecha->fechaI : '')}}">
      <div class="invalid-feedback">                                                                                      
        Fecha invalida
      </div>
    </div>
    <div class="invalid-feedback {{ $errors->has('fechaI')? 'd-block' : '' }}">
      {{ $errors->has('fechaI')? $errors->first('fechaI') : ''  }}
   </div>
    <!--Fecha Fin-->
    <div class="col-md-6">
      <label for="fechaF">Fecha Final</label>
      <input type="datetime-local" name="fechaF" class="form-control" id="fechaF" placeholder="Ingrese fecha final" value="{{ old('fechaF', date("Y-m-d\TH:i"), isset($fecha) ? $fecha->fechaF : '')}}">
    <div class="invalid-feedback">
      Fecha invalida
    </div>
  </div>
  <div class="invalid-feedback {{ $errors->has('fechaF')? 'd-block' : '' }}">
    {{ $errors->has('fechaF')? $errors->first('fechaF') : ''  }}
 </div>

     <!----ubicacion-->
     <div class="col-md-12 mb-3">
           <label class="col-form-label" for="ubicacion">Ubicacion</label>
        <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
           <span class="input-group-append">
              <button class="btn btn-dark" type="button">U</button>
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