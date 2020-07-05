<div class="form-row">
        <div class="col-md-6 mb-2">
              <label class="col-form-label" for="nameArea">Área</label>
           <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Seleccione el área que requiera">
              <span class="input-group-append">
                 <button class="btn btn-dark" type="button">A</button>
               </span>
             <input class="form-control" type="text" name="titulo" placeholder="Ingrese el titulo " value="{{ old('titulo', isset($call) ? $call->titulo_convocatoria : '') }}">
            </div>
         </div>
      
        <!----Unidad--->
        <div class="col-md-6 mb-2">
            <label class="col-form-label" for="nameUnidad">Unidad</label>
           <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Seleccione la unidad que requiere">
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
             <label class="col-form-label" for="nameGestion">Gestión</label>
             <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Solo se permite en la gestión actual">
            
              <span class="input-group-append">
                 <button class="btn btn-dark" type="button">G</button>
              </span> 
               <input type="date" class="form-control" name="gestion" value="{{old('gestion', date("Y-m-d"), isset($call) ? $call->gestion : '')}}">
             
          </div>
        </div>  
        <!----Requerimientos--->
        <div class="col-md-6 mb-2">
          <label class="col-form-label" for="nameReque">Requerimiento</label>
         <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Seleccione los requerimientos que requiera">
            <span class="input-group-append">
              <button class="btn btn-dark" type="button">R</button>
            </span>
            <select class="form-control js-example-basic-multiple " name="requerimientos[]" multiple="multiple">
               @foreach($requerimientos as $item)
                     <option class="text-dark" value="{{ $item->id }}">{{ $item->nombre_auxiliatura }}</option>
               @endforeach
            </select>
            
         </div>
      </div>
       <!---descripcion--->  
       <div class="col-md-6 mb-2">  
        <label class="col-form-label" for="">Descripción: </label>
         <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Escriba la descripción de la convocatoria">
            <textarea class="form-control" name="descripcion" rows="3" maxlength="150" >{{ old('descripcion', isset($call) ? $call->descripcion : '') }}</textarea>
         </div>
          <small class="form-text text-muted">Descripción corta de la convocatoria</small>
      </div> 
      
      
      <!---Requisitos--->  
      <div class="col-md-6 mb-2">  
        <label class="col-form-label" for="">Requisitos: </label>
         <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Escriba los requisitos de la convocatoria">
            <textarea class="form-control" name="requisito" rows="3" maxlength="150" >{{ old('requisito', isset($call) ? $call->requisitos : '') }}</textarea>
         </div>
         <!--- <small class="form-text text-muted">Descripción corta de la convocatoria</small>-->
      </div> 

    <!--Documentos a presentar-->
    <div class="col-md-6 mb-2">  
         <label class="col-form-label" for="">Documentos a presentar </label>
         <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Escriba los documentos que debe presentar">
            <textarea class="form-control" name="docsapresentar" rows="3" maxlength="150" >{{ old('docsapresentar', isset($call) ? $call->documentos_a_presentar : '') }}</textarea>
         </div>
         <small class="form-text text-muted">Documentos a presentar</small>
    </div>
   <!--fechas-->
   <div class="col-md-6 mb-2">
         <label class="col-form-label" for="name">Eventos</label>
      <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Seleccione los eventos que requiera">
         <span class="input-group-append">
            <button class="btn btn-dark" type="button">E</button>
         </span>
         <select class="form-control js-example-basic-multiple " name="eventos[]" multiple="multiple">
            @foreach($eventos as $item)
                  <option class="text-dark" value="{{ $item->id }}">{{ $item->evento }}</option>
            @endforeach
         </select>
      </div>
  </div>
  <!--fin de fechas-->
</div>

   <br>
                     
{{-- @if (!isset($call))
<input type="file" name="archivo">   
<div class="text-left">
 <small class="form-text text-muted">Solo se admiten archivos tipo PDF</small>  
 </div> 
@endif   --}}