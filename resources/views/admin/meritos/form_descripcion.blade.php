<div class="form-row">
    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="score">Descripción</label>
        <div class="input-group">
         <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "Ingrese el puntaje, tiene que ser menor a 100 y tambien menor al merito primario">
             <button class="btn btn-dark" type="button">D</button>
         </span>
         <input
                 class="form-control"
                 name="score"
                 placeholder="Ingrese la Descripción" type="text" value="">
     </div>
     <div class="">
         {{ $errors->has('score')? $errors->first('score') : ''  }}
     </div>
 </div>
       
       

        
        <div class="col-md-12 mb-3">
            <label class="col-form-label" for="score">Puntaje</label>
            <div class="input-group">
             <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "Ingrese el puntaje, tiene que ser menor a 100 y tambien menor al merito primario">
                 <button class="btn btn-dark" type="button">P</button>
             </span>
             <input
                     class="form-control"
                     name="score"
                     placeholder="Ingrese el puntaje" type="text" value="">
         </div>
         <div class="">
             {{ $errors->has('score')? $errors->first('score') : ''  }}
         </div>
     </div>
     </div>
 