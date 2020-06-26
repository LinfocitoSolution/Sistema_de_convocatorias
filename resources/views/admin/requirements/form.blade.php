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
    <!--Nombre de auxiliatura-->
    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="nombre_auxiliatura">Nombre de Auxiliatura</label>
        <div class="input-group" data-html="true"  data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 100 caracteres <br> -M&iacute;nimo 5 caracteres <br> -el nombre de auxiliatura no debe tener caracteres especiales, ni numeros">
            
        <span class="input-group-append">
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
             <div class="input-group" data-html="true"  data-toggle="popover" title="Restricciones" data-content="-M&iacute;nimo 1 <br> -el codigo auxiliatura debe tener un rango de digitos entre 3 -2, <br> -el codigo auxiliatura solo permite numeros, <br> -el codigo auxiliatura no permite espacios ni caracteres especiales">
        <span class="input-group-append">    
            <button class="btn btn-dark" type="button">CA</button>
        </span>
        <input
                    class="form-control {{ $errors->has('codigo_auxiliatura') ? 'is-invalid' : '' }}"
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
    <div class="input-group" data-html="true"  data-toggle="popover" title="Restricciones" data-content="-M&iacute;nimo 1 <br> -el rango de digitos de la cantidad de auxiliares esta entre 1-5, <br> -la cantidad de auxiliares solo debe ser numeros">
      <span class="input-group-append">
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
    <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 100 horas <br> -M&iacute;nimo 1 hora <br> -la cantidad de horas academicas solo debe ser numeros, <br> -el rango de digitos de la cantidad de horas academicas esta entre 1-3">
    <span class="input-group-append">
        <button class="btn btn-dark" type="button">HA</button>
    </span>
    <input
                    class="form-control  {{ $errors->has('cantidad_horas_academicas') ? 'is-invalid' : '' }}"
                    name="cantidad_horas_academicas"
                    placeholder="Ingrese las horas" type="text"  value="{{ old('cantidad_horas_academicas', isset($requerimiento) ? $requerimiento->cantidad_horas_academicas : '') }}">
</div>



    </div>
</div>
<div class="invalid-feedback {{ $errors->has('cantidad_horas_academicas')? 'd-block' : '' }}">
    {{ $errors->has('cantidad_horas_academicas')? $errors->first('cantidad_horas_academicas') : 'El campo de Nombre es requerido'  }}
 </div>
    
    




            

   