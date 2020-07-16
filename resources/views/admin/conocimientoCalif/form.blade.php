<div class="form-row">

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="name">Item</label>
        <div class="input-group">
            <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
                <button class="btn btn-dark" type="button">I</button>
            </span>
            <input
                    class="form-control"
                    name="item"
                    placeholder="Ingrese el item" type="text" value="">       
        </div>
    </div>
    <div class="invalid-feedback { $errors->has('item')? 'd-block' : '' }}">
        {{ $errors->has('Item')? $errors->first('item') : ''}}
     </div>
        <div class="col-md-12 mb-3">
            <label class="col-form-label" for="name">Temática</label>
            <div class="input-group">
                <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
                    <button class="btn btn-dark" type="button">T</button>
                </span>
                <input
                        class="form-control"
                        name="tematica"
                        placeholder="Ingrese el tema" type="text" value="">        
            </div>
        </div>
        <div class="invalid-feedback { $errors->has('tematica')? 'd-block' : '' }}">
            {{ $errors->has('tematica')? $errors->first('tematica') : ''}}
        </div>
            <div class="col-md-12 mb-3">
                <label class="col-form-label" for="codigp_auxilitura">Código de Auxiliatura</label>
                <div class="input-group">
                    <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
                        <button class="btn btn-dark" type="button">C</button>
                    </span>
                    <input
                            class="form-control"
                            name="codAux"
                            placeholder="Ingrese Código de auxiliatura" type="text" value="">         
                </div>
            </div>
            <div class="invalid-feedback { $errors->has('codigo_auxiliatura')? 'd-block' : '' }}">
                {{ $errors->has('codigo_auxiliatura')? $errors->first('codigo') : ''}}
             </div>
                <div class="col-md-12 mb-3">
                    <label class="col-form-label" for="puntaje">Puntaje</label>
                    <div class="input-group">
                        <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
                            <button class="btn btn-dark" type="button">P</button>
                        </span>
                        <input
                                class="form-control"
                                name="puntaje"
                                placeholder="Ingrese puntaje" type="text" value="">
                                
                    </div>
                </div>
                <div class="invalid-feedback { $errors->has('puntaje')? 'd-block' : '' }}">
                    {{ $errors->has('puntaje')? $errors->first('puntaje') : ''}}
                 </div>
</div>
           

            