<div class="form-row">

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="name">Nombre de Unidad</label>
        <div class="input-group" data-html="true" data-toggle="popover" title="Restricciones" data-content="No definido">
            <span class="input-group-append">
                <button class="btn btn-dark" type="button">N</button>
            </span>
            <input
                    class="form-control"
                    name="name"
                    placeholder="Ingrese Nombre" type="text" value="">
                    <!--{ old('name', isset($unidad) ? $unidad->name : '') }}-->
        </div>
    </div>
 <!--   <div class="invalid-feedback { $errors->has('name')? 'd-block' : '' }}">
        { $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }}
     </div>-->

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="description">Descripcion</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-dark" type="button">D</button>
            </span>
           <!-- este va a lado del from-control --{ $errors->has('description') ? 'is-invalid' : '' }}-->
            <textarea
                class="form-control "
                name="description"
                placeholder="Ingrese una descripcion" type="text"></textarea>
                   <!---{ old('description', isset($unidad) ? $area->description : '') }}-->
        </div>
    </div>
                <!--{ $errors->has('description')? 'd-block' : '' }}-->
    <div class="invalid-feedback ">
        <!--{ $errors->has('description')? $errors->first('description') : 'El campo de Nombre es requerido'  }}--->
     </div>
</div>