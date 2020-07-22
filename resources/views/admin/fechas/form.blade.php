   <div class="invalid-feedback {{ $errors->has('evento')? 'd-block' : '' }}">
        {{ $errors->has('evento')? $errors->first('evento') : 'El evento ingresado ya existe en nuestro registros'}}
     </div>
  
     
     <!--Fecha inicial-->
    <div class="col-md-6">
        <label for="fechaI">Fecha Inicial</label>
        <div class="input-group">
           <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "-El campo fecha tiene que tener el formato valido de fechas">
              <button class="btn btn-dark" type="button">FI</button>
           </span>
           <input type="datetime-local" name="fechaI" class="form-control" id="fechaI" placeholder="El campo fecha tiene que ser despues del dia actual" value="{{old('fechaI', date("Y-m-d\TH:i"), isset($fecha) ? $fecha->fechaI : '')}}">
             
            <div class="invalid-feedback">                                                                                     
            Fecha invalida
           </div>
        </div>
    </div>
    <div class="invalid-feedback {{ $errors->has('fechaI')? 'd-block' : '' }}">
      {{ $errors->has('fechaI')? $errors->first('fechaI') : ''  }}
   </div>
    <!--Fecha Fin-->
    <div class="col-md-6">
       <label for="fechaF">Fecha Final</label>
       <div class="input-group">
          <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "-El campo fecha tiene que tener el formato valido de fechas">
             <button class="btn btn-dark" type="button">FN</button>
          </span>
          <input type="datetime-local" name="fechaF" class="form-control" id="fechaF" placeholder="el campo fecha final no tiene que estar antes de la fecha inicial" value="{{ old('fechaF', date("Y-m-d\TH:i"), isset($fecha) ? $fecha->fechaF : '')}}">
          <div class="invalid-feedback">
             Fecha inválida
          </div>
       </div>
    </div>
  <div class="invalid-feedback {{ $errors->has('fechaF')? 'd-block' : '' }}">
    {{ $errors->has('fechaF')? $errors->first('fechaF') : ''  }}
 </div>

     <!----ubicacion-->
     <div class="col-md-12 mb-3">
           <label class="col-form-label" for="ubicacion">Ubicación</label>
        <div class="input-group">
           <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "-M&aacute;ximo 100 caracteres<br> -No acepta caracteres especiales">
              <button class="btn btn-dark" type="button">U</button>
           </span>
        
           <input
               class="form-control"
               name="ubicacion"
               placeholder="Ingrese una una ubicación" type="text" value="{{ old('ubicacion', isset($fecha) ? $fecha->ubicacion : '') }}"> 
              
       </div>
    </div>
<div class="invalid-feedback {{ $errors->has('ubicacion')? 'd-block' : '' }}">
    {{ $errors->has('ubicacion')? $errors->first('ubicacion') : ''  }}
 </div>
</div>