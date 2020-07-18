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
                        <label class="custom-control-label" for="switch1">a) Ser estudiante regular y con rendimiento académico de las carreras de
                            Licenciatura en Ingeniería Informática o Licenciatura en Ingeniería de Sistemas,
                            que cursa regularmente en la Universidad. Para las materias de Introducción a la
                            Programación y Elementos de Programación y Estructura de Datos, podrán
                            presentarse además estudiantes de Ing. Electrónica. Para la materia de
                            Computación I podrán presentarse además estudiantes de Ing. Industrial, Ing.
                            Mecánica, Ing. Eléctrica, Ing. Electro-Mecánica e Ing. Matemática. Estudiante
                            regular es aquel que está inscrito en la gestión académica vigente y cumple los
                            requisitos exigidos para seguir una carrera universitaria y el rendimiento
                            académico, haber aprobado más de la mitad de las materias curriculares que
                            corresponde al semestre anterior, certificado por el departamento de Registros
                            e Inscripciones.
                            </label>
                        
                        </div>
                            <br>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch2" name="habilitado1">
                                <label class="custom-control-label" for="switch2">b) O haber concluido el pensum con la totalidad de materias, teniendo pendiente
                                    tan solo la aprobación de la Modalidad de Graduación, pudiendo postular a la
                                    Auxiliatura Universitaria dentro del siguiente periodo académico (dos años o
                                    cuatro semestres), a partir de la fecha de conclusión de pensum de materias.
                                    Este periodo de dos años adicionales a los que contempla la conclusión del
                                    pensum de materias no podrá ampliarse bajo circunstancia alguna, aún en caso
                                    de encontrarse cursando otra carrera.</label>
                             </div>
                             <br>
                             <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch3" name="habilitado2">
                                <label class="custom-control-label" for="switch3">c) Queda expresamente prohibido la participación de estudiantes que hubiesen
                                    obtenido ya un título profesional en alguna de las carreras de la Universidad
                                    Mayor de San Simon o de cualquier otra del Sistema de la Universidad Boliviana
                                    (RCU No. 63/2018). Aún en caso de encontrarse cursando otra carrera con
                                    admisión especial. (Certificación emitida por el Departamento de Registros e
                                    Inscripciones).</label>
                            </div>
                            <br>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch4" name="habilitado3">
                                <label class="custom-control-label" for="switch4">d) Haber Aprobado la totalidad de las materias del semestre a la materia a la que
                                    se postula.</label>
                            </div>
                            <br>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch5" name="habilitado4">
                                <label class="custom-control-label" for="switch5">e)No tener deudas de libros en la biblioteca de la FCyT. </label>
                            </div>
                            <br>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch6" name="habilitado5">
                                <label class="custom-control-label" for="switch6">f) Participar y aprobar el Concurso de Méritos y proceso de pruebas de selección y
                                    admisión, conforme a convocatoria.</label>
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
                <form action="#" method="POST" style="display:inline-block">
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
