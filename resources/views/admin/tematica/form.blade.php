<div class="form-row">
    <div class="col-md-12 mb-3">
       <label class="col-form-label" for="name">Nombre Tematica</label>
       <div class="input-group">
           <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Solo admite letras">
               <button class="btn btn-dark" type="button">NT</button>
           </span>
           <input
           class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
           name="name"
           placeholder="Ingrese Nombre" type="text"  value="">
      </div>

       <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
           {{ $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }}
       </div>
   </div>
</div>