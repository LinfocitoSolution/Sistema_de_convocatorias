<div class="form-row">
  <div class="col-md-12 mb-3">
    
        <label class="col-form-label" for="name">Título de la convocatoria</label>
         <div class="input-group">
            <span class="input-group-append">
              <button class="btn btn-dark" type="button">T</button>
            </span>
              <input class="form-control" type="text" name="titulo" placeholder="Ingrese el titulo " value="{{ old('titulo', isset($call) ? $call->titulo_convocatoria : '') }}">
           </div>
         </div>
         
       <div class="col-md-12 mb-3">  
         <label class="col-form-label" for="">Descripción: </label>
         <div class="input-group">
              <textarea class="form-control" name="descripcion" rows="3" maxlength="150" >{{ old('descripcion', isset($call) ? $call->descripcion : '') }}</textarea>
          </div>
          <small class="form-text text-muted">Descripción corta de la convocatoria</small>
        </div>   
</div>
@if (!isset($call))
<input type="file" name="archivo">   
<div class="text-left">
 <small class="form-text text-muted">Solo se admiten archivos tipo PDF</small>  
 </div> 
@endif  