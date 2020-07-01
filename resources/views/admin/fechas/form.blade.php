<div class="form-row">

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="name">Evento</label>
        <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content= "-M&aacute;ximo 50 caracteres <br> -M&iacute;nimo 3 caracteres<br> -El campo nombre no acepta caracteres especiales,numeros<br> -El nombre ingresado ya existe en nuestros registros">
            <span class="input-group-append">
                <button class="btn btn-dark" type="button">E</button>
            </span>
            <input
                    class="form-control"
                    name="name"
                    placeholder="Ingrese Nombre" type="text" value="">
                    <!---dentro de value{ old('description', isset($area) ? $area->description : '') }-->
        </div>
    </div>
   <!-- <div class="invalid-feedback { $errors->has('name')? 'd-block' : '' }}">
        { $errors->has('name')? $errors->first('name') : 'Se requiere el campo nombre para continuar'}}
     </div>-->
   <!--Fecha-->
    <div class="col-md-6">
          <label for="fechaIni">Fechas</label>
          <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content= "-Presione el icono de calendario para elegir la fecha">
              <span class="input-group-append">
                 <button class="btn btn-dark" type="button">F</button>
              </span>
            <input type="date" name="fechaIni" class="form-control" id="fechaIni" placeholder="09/10/2019" required>
          </div>
        <div class="invalid-feedback">
            Fecha invalida
        </div>
    </div>

     <!----ubicacion-->
     <div class="col-md-12 mb-3">
           <label class="col-form-label" for="description">Ubicacion</label>
        <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content= "-M&aacute;ximo 100 caracteres">
           <span class="input-group-append">
              <button class="btn btn-dark" type="button">U</button>
           </span>
        
           <input
               class="form-control"
               name="description"
               placeholder="Ingrese una descripcion" type="text" value=""> 
              
       </div>
    </div>
<!---<div class="invalid-feedback { $errors->has('description')? 'd-block' : '' }}">
    { $errors->has('description')? $errors->first('description') : 'El campo de Nombre es requerido'  }}
 </div>--->
</div>