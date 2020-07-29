<div class="form-row">
            <div class="col-md-12 mb-3">
           <label class="col-form-label" for="name">Nombre de Sub-merito</label>
            <div class="input-group">
            <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= " ">
                <button class="btn btn-dark" type="button">N</button>
            </span>
            <input
                    class="form-control"
                    name="name"
                    placeholder="Ingrese el nombre de submerito" type="text" value="">
        </div>
        <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
            {{ $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }}
        </div>
    </div>

          <div class="col-md-12 mb-3">
           <label class="col-form-label" for="score">Puntaje</label>
           <div class="input-group">
            <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "Ingrese el puntaje, tiene que ser menor a 100 y tambien menor al merito primario">
                <button class="btn btn-dark" type="button">N</button>
            </span>
            <input
                    class="form-control"
                    name="score"
                    placeholder="Ingrese el puntaje" type="text" value="">
        </div>
        <div class="invalid-feedback {{ $errors->has('score')? 'd-block' : '' }}">
            {{ $errors->has('score')? $errors->first('score') : 'El campo de Nombre es requerido'  }}
        </div>
    </div>
     

    </div>
                    
                
               