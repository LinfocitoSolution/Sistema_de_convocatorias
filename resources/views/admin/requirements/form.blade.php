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
        <div class="input-group" data-html="true"  data-toggle="popover" title="Restricciones" data-content="el nombre de la auxiliatura">
        <span class="input-group-append">
           <button class="btn btn-dark" type="button">NA</button>
        </span>
        <input
                        class="form-control text-capitalize"
                        name="nombre_auxiliatura"
                        placeholder="Ingrese el nombre de auxiliatura" type="text"  value="{{ old('nombre_auxiliatura', isset($requerimiento) ? $requerimiento->nombre_auxiliatura : '') }}">
                    </div>
                </div>
                <div class="invalid-feedback {{ $errors->has('nombre_auxiliatura')? 'd-block' : '' }}">
                    {{ $errors->has('nombre_auxiliatura')? $errors->first('nombre_auxiliatura') : 'El campo de Nombre es requerido'  }}
                 </div>
    <!--Código de auxiliatura-->
    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="codigo_auxiliatura">Código de Auxiliatura</label>
             <div class="input-group" data-html="true"  data-toggle="popover" title="Restricciones" data-content="el codigo de la auxiliatura">
        <span class="input-group-append">
            <button class="btn btn-dark" type="button">CA</button>
        </span>
        <input
                    class="form-control text-capitalize"
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
    <div class="input-group" data-html="true"  data-toggle="popover" title="Restricciones" data-content="cantidad de auxiliares a designar">
      <span class="input-group-append">
            <button class="btn btn-dark" type="button">CA</button>
        </span>
        <input
                    class="form-control text-capitalize"
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
    <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="cantidad de horas academicas a asignar">
    <span class="input-group-append">
        <button class="btn btn-dark" type="button">HA</button>
    </span>
    <input
                    class="form-control text-capitalize"
                    name="cantidad_horas_academicas"
                    placeholder="Ingrese las horas" type="text"  value="{{ old('cantidad_horas_academicas', isset($requerimiento) ? $requerimiento->cantidad_horas_academicas : '') }}">
</div>



    </div>
</div>
<div class="invalid-feedback {{ $errors->has('cantidad_horas_academicas')? 'd-block' : '' }}">
    {{ $errors->has('cantidad_horas_academicas')? $errors->first('cantidad_horas_academicas') : 'El campo de Nombre es requerido'  }}
 </div>
    
    




            

   