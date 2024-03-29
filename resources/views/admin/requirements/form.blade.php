<div class="form-row">
    <!----Item
        <div class="col-md-12 mb-3">
            <label class="col-form-label" for="">Item</label>
            <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Seleccione un item">
                <span class="input-group-append">
                    <button class="btn btn-dark" type="button">I</button>
                </span>
                <select class="form-control js-example-basic-single" name="" single="single">
            
                <option selected class="text-muted"value="sistemas">1</option>
                <option value="informatica">2</option> 
                <option value="electrónica">3</option>
                <option value="informatica">4</option> 
                <option value="electrónica">5</option>
                <option value="informatica">6</option> 
                <option value="electrónica">7</option>
                <option value="informatica">8</option> 
                <option value="electrónica">9</option>
          </select>
        </div>-->
        <!--tipo de requerimiento-->
    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="tipo_requerimiento">Tipo de requerimiento</label>
        <div class="input-group" >
            
        <span class="input-group-append" data-html="true"  data-toggle="popover" title="Restricciones" data-content="para que tipo de convocatoria va dirigido este requerimiento">
           <button class="btn btn-dark" type="button">TR</button>
        </span>
        <select name="tipo_requerimiento" class="custom-select form-control">
        <option value="requerimiento de laboratorio"@if (old('tipo_requerimiento') == "requerimiento de laboratorio") {{ 'selected' }} @endif>Requerimiento de laboratorio</option>
            <option value="requerimiento de docencia"@if (old('tipo_requerimiento') == "requerimiento de docencia") {{ 'selected' }} @endif>Requerimiento de docencia</option> 
             
        </select>
                    </div>
                </div>
                <div class="invalid-feedback {{ $errors->has('tipo_requerimiento')? 'd-block' : '' }}">
                    {{ $errors->has('tipo_requerimiento')? $errors->first('tipo_requerimiento') : 'Este nombre de auxiliatura ya existe en nuestros registros'  }}
                 </div>
    <!--Nombre de auxiliatura-->
    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="nombre_auxiliatura">Nombre de Auxiliatura</label>
        <div class="input-group">
            
        <span class="input-group-append" data-html="true"  data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 100 caracteres <br> -M&iacute;nimo 5 caracteres <br> -El nombre de auxiliatura no debe tener caracteres especiales, ni números">
           <button class="btn btn-dark" type="button">NA</button>
        </span>
        <input
                        class="form-control  {{ $errors->has('nombre_auxiliatura') ? 'is-invalid' : '' }}"
                        name="nombre_auxiliatura"
                        placeholder="Ingrese el nombre de auxiliatura" type="text"  value="{{ old('nombre_auxiliatura', isset($requerimiento) ? $requerimiento->nombre_auxiliatura : '') }}">
                    </div>
                </div>
                <div class="invalid-feedback {{ $errors->has('nombre_auxiliatura')? 'd-block' : '' }}">
                    {{ $errors->has('nombre_auxiliatura')? $errors->first('nombre_auxiliatura') : 'Este nombre de auxiliatura ya existe en nuestros registros'  }}
                 </div>
    <!--Código de auxiliatura-->
    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="codigo_auxiliatura">Código de Auxiliatura</label>
             <div class="input-group">
        <span class="input-group-append" data-html="true"  data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 10 <br>-Mínimo 3 <br> -El código auxiliatura debe tener un rango de dígitos entre 3 -2, <br> -El codigo auxiliatura solo permite números, <br> -El código auxiliatura no permite espacios ni caracteres especiales">    
            <button class="btn btn-dark" type="button">CA</button>
        </span>
        <input
                    class="form-control  {{ $errors->has('codigo_auxiliatura') ? 'is-invalid' : '' }}"
                    name="codigo_auxiliatura"
                    placeholder="Ingrese el código de la auxiliatura" type="text"  value="{{ old('codigo_auxiliatura', isset($requerimiento) ? $requerimiento->codigo_auxiliatura : '') }}">
            </div>
    </div>
    <div class="invalid-feedback {{ $errors->has('codigo_auxiliatura')? 'd-block' : '' }}">
        {{ $errors->has('codigo_auxiliatura')? $errors->first('codigo_auxiliatura') : 'El campo de Nombre es requerido'  }}
     </div>
   <!--Cantidad de auxiliares-->
   <div class="col-md-12 mb-3">
      <label class="col-form-label" for="cantidad_de_auxiliares">Cantidad de Auxiliares</label>
      <div class="input-group">
          <span class="input-group-append" data-html="true"  data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 20 <br>-Mínimo 1 <br> -El rango de dígitos de la cantidad de auxiliares esta entre 1-5, <br> -La cantidad de auxiliares solo debe ser números">
             <button class="btn btn-dark" type="button">CA</button>
          </span>
          <input
                    class="form-control  {{ $errors->has('cantidad_de_auxiliares') ? 'is-invalid' : '' }}"
                    name="cantidad_de_auxiliares"
                    placeholder="Ingrese la cantidad de auxiliares" type="text"  value="{{ old('cantidad_de_auxiliares', isset($requerimiento) ? $requerimiento->cantidad_de_auxiliares: '') }}">
                    
     </div>
   </div>
   <div class="invalid-feedback {{ $errors->has('cantidad_de_auxiliares')? 'd-block' : '' }}">
       {{ $errors->has('cantidad_de_auxiliares')? $errors->first('cantidad_de_auxiliares') : 'El campo de Nombre es requerido'  }}
   </div>

   

     <!--Horas académicas-->
    <div class="col-md-12 mb-3">
       <label class="col-form-label" for="cantidad_horas_academicas">Horas Académicas</label>
       <div class="input-group">
          <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Máximo 100 horas <br> -Mínimo 1 hora <br> -la cantidad de horas académicas solo debe ser números, <br> -el rango de dígitos de la cantidad de horas académicas esta entre 1-3">
            <button class="btn btn-dark" type="button">HA</button>
          </span>
          <input
                    class="form-control  {{ $errors->has('cantidad_horas_academicas') ? 'is-invalid' : '' }}"
                    name="cantidad_horas_academicas"
                    placeholder="Ingrese las horas" type="text"  value="{{ old('cantidad_horas_academicas', isset($requerimiento) ? $requerimiento->cantidad_horas_academicas : '') }}">
       </div>
    </div>

    <div class="invalid-feedback {{ $errors->has('cantidad_horas_academicas')? 'd-block' : '' }}">
        {{ $errors->has('cantidad_horas_academicas')? $errors->first('cantidad_horas_academicas') : 'El campo de Nombre es requerido'  }}
    </div>
</div>    
    




            

   