<div class="form-row">
    <div class="col-md-6 mb-2">
        <label class="col-form-label" for="nameConvocatoria">Convocatoria</label>
       <div class="input-group">
          <span class="input-group-append"  data-html="true" data-toggle="popover" title="Restricciones" data-content="-Seleccione la convocatoria a la que pertenece este merito">
            <button class="btn btn-dark" type="button">C</button>
          </span>
          <select class="custom-select form-control" type="text" name="convocatoria"  >
              @foreach($calls as $item)
              @if($item->unit_id==$uni)  
              @if($item->publicado=="no")
                
                    <option class="text-dark" value="{{ $item->id }}">{{ $item->titulo_convocatoria }}</option>
                @endif    
                @endif
              @endforeach
           </select>
       </div>
       <div class="invalid-feedback {{ $errors->has('convocatoria')? 'd-block' : '' }}">
        {{ $errors->has('convocatoria')? $errors->first('convocatoria') : 'El campo unidade es requerido'  }}
    </div>
</div>
    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="name">Nombre de merito</label>
        <div class="input-group">
            <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "-M&aacute;ximo 100 caracteres">
                <button class="btn btn-dark" type="button">N</button>
            </span>
            <input
                    class="form-control"
                    name="name"
                    placeholder="Ingrese nombre de merito" type="text" value="{{ old('name', isset($merito) ? $merito->name : '') }}">
                    
        </div>
        <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
            {{ $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }}
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="name">Puntaje</label>
        <div class="input-group">
            <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "seleccione la cantidad de puntaje para este merito no mayor a 100">
                <button class="btn btn-dark" type="button">P</button>
            </span>
            <input
                    class="form-control"
                    name="score"
                    placeholder="Ingrese el puntaje para este merito" type="text" value="{{ old('score', isset($merito) ? $merito->score : '') }}">
                    
        </div>
        <div class="invalid-feedback {{ $errors->has('score')? 'd-block' : '' }}">
            {{ $errors->has('score')? $errors->first('score') : 'El campo de Nombre es requerido'  }}
        </div>
    </div>
</div>