<div class="form-row">
        <div class="col-md-6 mb-2">
              <label class="col-form-label" for="nameArea">Titulo</label>
           <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Seleccione el área que requiera">
              <span class="input-group-append">
                 <button class="btn btn-dark" type="button">T</button>
               </span>
             <input class="form-control" type="text" name="titulo" placeholder="Ingrese el titulo " value="{{ old('titulo', isset($call) ? $call->titulo_convocatoria : '') }}">
            </div>
            <div class="invalid-feedback {{ $errors->has('titulo')? 'd-block' : '' }}">
               {{ $errors->has('titulo')? $errors->first('titulo') : 'El campo de Nombre es requerido'  }}
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
           <div class="invalid-feedback {{ $errors->has('unidad')? 'd-block' : '' }}">
            {{ $errors->has('unidad')? $errors->first('unidad') : 'El campo de Nombre es requerido'  }}
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
          <div class="invalid-feedback {{ $errors->has('gestion')? 'd-block' : '' }}">
            {{ $errors->has('gestion')? $errors->first('gestion') : 'El campo de Nombre es requerido'  }}
        </div>
        </div>  
        <!----Requerimientos--->
        <div class="col-md-6 mb-2">
          <label class="col-form-label" for="nameReque">Requerimiento de Laboratorio</label>
         <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Seleccione los requerimientos que requiera">
            <span class="input-group-append">
              <button class="btn btn-dark" type="button">R</button>
            </span>
            <select class="form-control js-example-basic-multiple " name="requerimientos[]" multiple="multiple">
               @foreach($requerimientos as $item)
                     @if($item->tipo_requerimiento=='requerimiento de laboratorio')
                        <option class="text-dark" value="{{ $item->id }}">{{ $item->nombre_auxiliatura }}</option>
                     @endif      
               @endforeach
            </select>
         </div>
         <div class="invalid-feedback {{ $errors->has('requerimientos')? 'd-block' : '' }}">
            {{ $errors->has('requerimientos')? $errors->first('requerimientos') : ''  }}
        </div>
      </div>
      
      <!---Requisitos--->  
      <div class="col-md-6 mb-2">  
        <label class="col-form-label" for="">Requisitos: </label>
         <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="-Escriba los requisitos de la convocatoria">
            <textarea class="form-control" name="requisito" rows="10" maxlength="3000" >{{ old('requisito', isset($call) ? $call->requisitos : '') }}</textarea>
         </div>
         <div class="invalid-feedback {{ $errors->has('requisito')? 'd-block' : '' }}">
            {{ $errors->has('requisito')? $errors->first('requisito') : 'El campo de Nombre es requerido'  }}
        </div>
         <!--- <small class="form-text text-muted">Descripción corta de la convocatoria</small>-->
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
        <div class="invalid-feedback {{ $errors->has('eventos')? 'd-block' : '' }}">
         {{ $errors->has('eventos')? $errors->first('eventos') : 'El campo de Nombre es requerido'  }}
     </div>
     </div>
     <!--fin de fechas-->
</div>

 
                     
{{-- @if (!isset($call))
<input type="file" name="archivo">   
<div class="text-left">
 <small class="form-text text-muted">Solo se admiten archivos tipo PDF</small>  
 </div> 
@endif   --}}