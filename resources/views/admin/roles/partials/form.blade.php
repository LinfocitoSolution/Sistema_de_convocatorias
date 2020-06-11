<div class="form-row">
    <div class="col-md-12 mb-3">
       <label class="col-form-label" for="name">Nombre Rol</label>
       <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="no definido">
           <span class="input-group-append">
               <button class="btn btn-dark" type="button">N</button>
           </span>
           <input class="form-control" name="name"  placeholder="Ingrese Nombre" type="text"  value="{{ old('name', isset($rol) ? $rol->name : '') }}">
           
       </div>
   </div>

   <div class="col-md-12 mb-3">
       <label class="col-form-label" for="roles">Permisos</label>
       <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Puede seleccionar uno o mas permisos">
           <span class="input-group-append">
               <button class="btn btn-dark" type="button">P</button>
           </span>
           <select class="form-control js-example-basic-multiple {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="permissions[]" multiple="multiple">
            
                     @foreach($permissions as $item)
                             <option value="{{ $item->name }}">{{ $item->name }}</option>
                     @endforeach
           </select>
       </div>
   </div>
</div>