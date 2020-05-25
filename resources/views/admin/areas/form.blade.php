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
                    placeholder="Ingrese Nombre" type="text" value="{{ old('name', isset($area) ? $area->name : '') }}">
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="description">Descripcion</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-primary" type="button">D</button>
            </span>
            <textarea
                class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                name="description"
                placeholder="Ingrese una descripcion" type="text">{{ old('description', isset($area) ? $area->description : '') }}</textarea>
        </div>
    </div>
</div>