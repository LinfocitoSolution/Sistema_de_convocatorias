<div class="form-row">
    <div class="col-md-12 mb-3">
       <label class="col-form-label" for="name">Nombre Rol</label>
       <div class="input-group">
           <span class="input-group-append">
               <button class="btn btn-primary" type="button">N</button>
           </span>
           <input
                   class="form-control"
                   name="name"
                   placeholder="Ingrese Nombre de Rol" type="text">
       </div>
   </div>

   <div class="col-md-12 mb-3">
       <label class="col-form-label" for="roles">Permisos</label>
       <div class="input-group">
           <span class="input-group-append">
               <button class="btn btn-primary" type="button">P</button>
           </span>
           <select class="form-control js-example-basic-multiple {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="permissions[]" multiple="multiple">
            
                     @foreach($permissions as $item)
                             <option value="{{ $item->name }}" {{ (isset($role) && $role->permissions->contains('name', $item->name)) ? 'selected' : '' }}>{{ $item->name }}</option>
                     @endforeach
           </select>
       </div>
         <div class="invalid-feedback {{ $errors->has('permissions')? 'd-block' : '' }}">
        {{ $errors->has('permissions')? $errors->first('permissions') : 'Este campo es requerido'  }}
    </div>
   </div>
</div>