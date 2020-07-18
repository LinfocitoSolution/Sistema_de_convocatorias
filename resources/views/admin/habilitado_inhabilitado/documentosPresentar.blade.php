@extends("admin.layouts.plantilladmin")
@section('title')
    Calificación de los Documentos de Postulante
@endsection

@section("content")

<div class="content-wrapper">
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                <h1>Calificación de los Documentos de Postulante<h1>
                 
                </div>
                <div class="card-body">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="switch1" name="example">
                        <label class="custom-control-label" for="switch1">a) Presentar solicitud escrita dirigida a la Jefatura de Departamento de Informática y Sistemas
                            especificando claramente la(s) auxiliatura(s) a la(s) que se postula:
                            <br>
                            - Código de auxiliatura
                            <br>
                            - Nombre de la auxiliatura. </label>
                        
                        </div>
                            <br>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch2" name="habilitado1">
                                <label class="custom-control-label" for="switch2">b) Kardex actualizado a la gestión I/2019 (periodos cumplidos a la fecha), expedido por Oficina
                                    de Kardex de la Facultad de Ciencias y Tecnología.</label>
                             </div>
                             <br>
                             <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch3" name="habilitado2">
                                <label class="custom-control-label" for="switch3">c) Presentar certificado de condición de estudiante expedido por el Departamento de
                                    Registros e Inscripciones.</label>
                            </div>
                            <br>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch4" name="habilitado3">
                                <label class="custom-control-label" for="switch4">d) Fotocopia del carnet de identidad.</label>
                            </div>
                            <br>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch5" name="habilitado4">
                                <label class="custom-control-label" for="switch5">e) Certificado de la Biblioteca de la FCyT donde se evidencia que no tiene pendiente deuda de
                                    libros prestados.</label>
                            </div>
                            <br>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch6" name="habilitado5">
                                <label class="custom-control-label" for="switch6">f) Presentar resumen de currículum Vitae de acuerdo al subtítulo 5 CALIFICACIÓN DE MÉRITOS
                                    de esta convocatoria.</label>
                            </div>
                            <br>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch7" name="habilitado6">
                                <label class="custom-control-label" for="switch7">g) Presentar documentación que respalde el currículum vitae, ORGANIZADO Y SEPARADO de
                                    acuerdo a la tabla de calificación de méritos.</label>
                            </div>
                            <br>
                            
                          
                            <div class="form-actions text-center">
                                <button class="btn btn-dark" onclick="hola()" type="button">Confirmar la calificacion</button>
                            </div>
                            
                            </div>
                            </div>
                    </div>
                </div>
                @endsection
                <form action="{{route('documentos.habilitar',$user->id)}}" method="POST" style="display:inline-block">
                  {{ method_field('PUT')}}
                      {{ csrf_field() }}
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content" >
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Estado de calificacion</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <!-- de aqui tendra que tomar los valores para guardar en bse de datos-->
                        
                        <div class="modal-body" id="ventana">
                        
                          <div class="input-group">
                         
                            <div class="input-group-prepend">
                              <span class="input-group-text text-white">Estado</span>
                            </div>		  
                            <input type="text" class="form-control"  name="hab" value="" id="hab">
                          </div>
                         <div class="input-group">
                         
                            <div class="input-group-prepend">
                              <span class="input-group-text text-white">Descripcion</span>
                            </div>
                            
                            <textarea class="form-control" aria-label="With textarea" name="descripcion" value="" id="descripcion"></textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-outline-dark" type="submit">Confirmar Habilitado/Inhabilitado</button>
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                          
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                    

                    
                
                
           
                
                 
