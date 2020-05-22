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

           <select class="form-control" name="permisos" multiple="multiple" >
              
                   <option>list user</option>
                   <option>create user</option>
                   <option>edit user</option>
                   <option>delete user</option>
           </select>
       </div>
   </div>
</div>