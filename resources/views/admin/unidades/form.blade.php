<div class="form-row">

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="name">Nombre de Unidad</label>
        <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="Nombre de la unidad academica a crear, Ej:Departamento de informatica-sistemas">
            <span class="input-group-append">
                <button class="btn btn-dark" type="button">N</button>
            </span>
            <input
                    class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    name="name"
                    placeholder="Ingrese Nombre" type="text" value="{{ old('name', isset($unidad) ? $unidad->name : '') }}">
                    
        </div>
    </div>
    <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
        {{ $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }}
     </div>

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="description">Descripcion</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-dark" type="button">D</button>
            </span>
           
            <textarea
                class="form-control  {{ $errors->has('description') ? 'is-invalid' : '' }} "
                name="description"
                placeholder="Ingrese una descripcion" type="text"> {{ old('description', isset($unidad) ? $unidad->description : '') }}</textarea>
                  
        </div>
    </div>
                
    <div class="invalid-feedback {{ $errors->has('description')? 'd-block' : '' }}">
        {{ $errors->has('description')? $errors->first('description') : 'El campo de Nombre es requerido'  }}
     </div>
</div>