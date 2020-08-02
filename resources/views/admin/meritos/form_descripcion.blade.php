<div class="form-row">
    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="descripcion">Descripción</label>
        <div class="input-group">
         <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "Ingrese la descripcion de este submerito">
             <button class="btn btn-dark" type="button">D</button>
         </span>
         <input
                 class="form-control"
                 name="descripcion"
                 placeholder="Ingrese la Descripción" type="text" value="">
     </div>
     <div class="invalid-feedback {{ $errors->has('descripcion')? 'd-block' : '' }}">
         {{ $errors->has('descripcion')? $errors->first('descripcion') : ''  }}
     </div>
 </div>
       
 <div class="col-md-6 mb-2">
    <label class="col-form-label" for="nameUnidad">Tipo Descripcion</label>
   <div class="input-group">
      <span class="input-group-append"  data-html="true" data-toggle="popover" title="Restricciones" data-content="-Si selecciona promedio en puntaje colocar 0">
        <button class="btn btn-dark" type="button">TD</button>
      </span>
      <select class="custom-select form-control" type="text" name="tipo"  >
          
                <option class="text-dark"  value="promedio">Promedio</option>
                <option class="text-dark"  value="documentos">Documentos</option>
       </select>
   </div>
   <div class="invalid-feedback {{ $errors->has('tipo')? 'd-block' : '' }}">
    {{ $errors->has('tipo')? $errors->first('tipo') : 'El campo unidade es requerido'  }}
</div>
   
</div>

        
        <div class="col-md-12 mb-3">
            <label class="col-form-label" for="score">Puntaje</label>
            <div class="input-group">
             <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "Ingrese el puntaje">
                 <button class="btn btn-dark" type="button">P</button>
             </span>
             <input
                     class="form-control"
                     name="score"
                     placeholder="Ingrese el puntaje" type="text" value="">
         </div>
         <div class="invalid-feedback {{ $errors->has('score')? 'd-block' : '' }}">
            {{ $errors->has('score')? $errors->first('score') : 'El campo unidade es requerido'  }}
        </div>
     </div>
     </div>
 