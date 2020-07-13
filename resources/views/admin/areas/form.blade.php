<div class="form-row">

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="name">Nombre de Area</label>
        <div class="input-group">
            <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "-M&aacute;ximo 50 caracteres <br> -M&iacute;nimo 3 caracteres<br> -El campo nombre no acepta caracteres especiales,numeros<br> -El nombre ingresado ya existe en nuestros registros">
                <button class="btn btn-dark" type="button">N</button>
            </span>
            <input
                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    name="name"
                    placeholder="Ingrese Nombre" type="text" value="{{ old('name', isset($area) ? $area->name : '') }}">
        </div>
    </div>
    <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
        {{ $errors->has('name')? $errors->first('name') : 'Se requiere el campo nombre para continuar'}}
     </div>
<!--Descripción-->
    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="description">Descripcion</label>
        <div class="input-group">
            <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "-M&aacute;ximo 100 caracteres">
                <button class="btn btn-dark" type="button">D</button>
            </span>
            
            <textarea
                class="form-control"
                name="description"
                placeholder="Ingrese una descripcion" type="text"> {{ old('description', isset($area) ? $area->description : '') }}</textarea>
                  
        </div>
    </div>
    <div class="invalid-feedback {{ $errors->has('description')? 'd-block' : '' }}">
        {{ $errors->has('description')? $errors->first('description') : 'El campo de Nombre es requerido'  }}
     </div>
</div>