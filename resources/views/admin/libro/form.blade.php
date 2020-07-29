

     <div class="col-md-6 mb-2">
      <label class="col-form-label" for="name">Nombre postulante</label>
     <div class="input-group">
        <span class="input-group-append"  data-html="true" data-toggle="popover" title="Restricciones" data-content="-Seleccione el postulante que requiera">
          <button class="btn btn-dark" type="button">U</button>
        </span>
        <select class="custom-select form-control" type="text" name="name"  >
            @foreach($users as $item)
            @foreach($item->requerimientos as $req)

                  <option class="text-dark" value="{{ $item->id }}">{{ $item->name }}</option>
            
            @endforeach      
            @endforeach
         </select>
     </div>
  </div>
  <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
   {{ $errors->has('name')? $errors->first('name') : 'El campo unidade es requerido'  }}
</div>
  
    <!----NUMERO DE DOCUMENTOS--->
    <div class="col-md-6 mb-2">
        <label class="col-form-label" for="">Numero de documentos</label>
       <div class="input-group">
          <span class="input-group-append"  data-html="true" data-toggle="popover" title="Restricciones" data-content="-Seleccione la unidad que requiera">
            <button class="btn btn-dark" type="button">ND</button>
          </span>
          <input type="number" class="form-control" name="documento" value="">
        </div>
       
    </div>
    <div class="invalid-feedback {{ $errors->has('documento')? 'd-block' : '' }}">
      {{ $errors->has('documento')? $errors->first('documento') : 'El campo unidade es requerido'  }}
  </div>

   
   
   <!--Hora-->
   <div class="col-md-6">
   <label for="HoraI">Hora</label>
   <div class="input-group">
      <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
         <button class="btn btn-dark" type="button">H</button>
      </span>
      <input type="time" name="fecha_entrega" class="form-control" id="" placeholder="Ingrese fecha y hora de postulacion" value="">
        
       
   </div>

</div>
<div class="invalid-feedback {{ $errors->has('fecha_entrega')? 'd-block' : '' }}">
   {{ $errors->has('fecha_entrega')? $errors->first('fecha_entrega') : 'El campo unidade es requerido'  }}
</div>
 <!--fin de fechas-->

