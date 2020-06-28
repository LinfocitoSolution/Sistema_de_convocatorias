<div class="form-row">
        <div class="col-md-6 mb-2">
              <label class="col-form-label" for="nameArea">Area-Titulo Convocatoria</label>
           <div class="input-group">
              <span class="input-group-append">
                 <button class="btn btn-dark" type="button">A</button>
               </span>
             <!--<input class="form-control" type="text" name="titulo" placeholder="Ingrese el titulo " value="{ old('titulo', isset($call) ? $call->titulo_convocatoria : '') }}">-->
              <select class="form-control" type="text" name="titulo"  >
                     @foreach($areas as $item)
                           <option class="text-dark" value="{{ $item->name }}">{{ $item->name }}</option>
                     @endforeach
               </select>
            </div>
         </div>
      
        <!----Unidad--->
        <div class="col-md-6 mb-2">
            <label class="col-form-label" for="nameUnidad">Unidad</label>
           <div class="input-group">
              <span class="input-group-append">
                <button class="btn btn-dark" type="button">U</button>
              </span>
              <select class="custom-select form-control" type="text" name="unidad"  >
                  @foreach($unidades as $item)
                        <option class="text-dark" value="{{ $item->id }}">{{ $item->name }}</option>
                  @endforeach
               </select>
           </div>
        </div>

        <!---Gestion-->
        <div class="col-md-6 mb-2">
             <label class="col-form-label" for="nameGestion">Gestion</label>
             <div class="input-group">
            
              <span class="input-group-append">
                 <button class="btn btn-dark" type="button">G</button>
              </span> 
              <!---en value iba esto: { ucfirst(Auth::user()->name)}}-->
               <input type="text" class="form-control" id="gestion" value="2020">
             
          </div>
        </div>  
        <!----Requerimientos--->
        <div class="col-md-6 mb-2">
          <label class="col-form-label" for="nameReque">Requerimiento</label>
         <div class="input-group">
            <span class="input-group-append">
              <button class="btn btn-dark" type="button">R</button>
            </span>
            <select class="custom-select form-control" type="text" name="requerimiento"  >
               @foreach($requerimientos as $item)
                     <option class="text-dark" value="{{ $item->id }}">{{ $item->nombre_auxiliatura }}</option>
               @endforeach
            </select>
            
         </div>
      </div>
       <!---descripcion--->  
       <div class="col-md-6 mb-2">  
        <label class="col-form-label" for="">Descripción: </label>
         <div class="input-group">
            <textarea class="form-control" name="descripcion" rows="3" maxlength="150" >{{ old('descripcion', isset($call) ? $call->descripcion : '') }}</textarea>
         </div>
          <small class="form-text text-muted">Descripción corta de la convocatoria</small>
      </div> 
      <!---Requisitos--->  
      <div class="col-md-6 mb-2">  
        <label class="col-form-label" for="">Requisitos: </label>
         <div class="input-group">
            <textarea class="form-control" name="descripcion" rows="3" maxlength="150" ></textarea>
         </div>
         <!--- <small class="form-text text-muted">Descripción corta de la convocatoria</small>-->
      </div> 
</div>
@if (!isset($call))
<input type="file" name="archivo">   
<div class="text-left">
 <small class="form-text text-muted">Solo se admiten archivos tipo PDF</small>  
 </div> 
@endif  