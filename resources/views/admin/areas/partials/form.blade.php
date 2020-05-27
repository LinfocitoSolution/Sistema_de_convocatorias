<div class="form-row">

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="name">Nombre de Area</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-primary" type="button">N</button>
            </span>
            <input
                    class="form-control"
                    name="name"
                    value="{{ 'aqui' }}"
            >
        </div>
        <!--<div class=invalid-feedback{$errors->has('name')? 'd-block' : '' }>
        { $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }
        </div>-->
    </div>

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="description">Descripcion</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-primary" type="button">D</button>
            </span>
            <textarea
                    class="form-control"
                    name="description"
                    type="text">{{ $area->description }}</textarea>
        </div>

        <!--<div class="invalid-feedback { $errors->has('description')? 'd-block' : '' }}">
            { $errors->has('description')? $errors->first('description') : 'El campo de Nombre es requerido'  }}
        </div>-->
    </div>
</div>