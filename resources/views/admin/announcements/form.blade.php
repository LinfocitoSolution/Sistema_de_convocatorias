<div class="form group">
    <br>
        <label for="">Título de la convocatoria</label>
        <div class="row">
           <div class="col">
              <input type="text" name="titulo" class="form-control" value="{{ old('titulo', isset($call) ? $call->titulo_convocatoria : '') }}">
           </div>
         </div>
         <label for="">Descripción: </label>
         <div class="row">
            <div class="col">
              <textarea class="form-control" name="descripcion" rows="3" maxlength="150" >{{ old('descripcion', isset($call) ? $call->descripcion : '') }}</textarea>
              <small class="form-text text-muted">Descripción corta de la convocatoria</small>
            </div>
         </div>
      <br>
      @if (!isset($call))
        <input type="file" name="archivo">   
        <br>
        <small class="form-text text-muted">Solo se admiten archivos tipo PDF</small>  
      @endif     
      <div class="col">
        <button type="submit" class="btn btn-primary" margin-left="50">Guardar</button>
      </div>
</div>