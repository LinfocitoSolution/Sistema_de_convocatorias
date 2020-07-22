
@extends("admin.layouts.plantilladmin")
@section('title')
    Sub Méritos
@endsection

@section("content")

<div class="content-wrapper">
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                <h1>Sub Méritos<h1>
                 
                </div>

            <div class="card-body">
             <div class="form-row">
            <div class="col-md-12 mb-3">
           <label class="col-form-label" for="name">Nombre de Sub-merito</label>
            <div class="input-group">
            <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
                <button class="btn btn-dark" type="button">N</button>
            </span>
            <input
                    class="form-control"
                    name="name"
                    placeholder="" type="text" value="">
        </div>
    </div>

          <div class="col-md-12 mb-3">
           <label class="col-form-label" for="name">Puntaje</label>
           <div class="input-group">
            <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
                <button class="btn btn-dark" type="button">N</button>
            </span>
            <input
                    class="form-control"
                    name="puntaje"
                    placeholder="" type="text" value="">
        </div>
    </div>
    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="name">Descripción</label>
        <div class="input-group">
         <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content= "">
             <button class="btn btn-dark" type="button">D</button>
         </span>
         <input
                 class="form-control"
                 name="descripcion"
                 placeholder="" type="text" value="">
            </div>
          </div>
                    <form class="form-horizontal" action="">
                    <div class="form-actions text-center">
                        
                        <button class="btn btn-outline-dark" type="submit">Guardar</button>
                    <a class="btn btn-outline-dark" href="{{route('meritoLab.index')}}">Cancelar</a>
                    </div>
                
                </form>     
           </div>
       </div>
    </div>
  </div>
</div>
    </div>
@endsection