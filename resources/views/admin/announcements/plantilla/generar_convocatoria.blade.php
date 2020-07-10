<!doctype html>
<html>
 <head>
    <title>Convocatoria Laboratorio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/convo/stil.css')}}" rel="stylesheet">    
        
    @include('admin.announcements.plantilla.script')
 </head>  
 <body>

   <script type="text/javascript">
      const conv = {!! json_encode($call) !!};
      // console.log(conv);
  </script>

   <div class="hoja" id="datos">  
         <br>
           <h4 style="margin-left: 8cm">{{$call->titulo_convocatoria}}</h4>
           <h5 style="margin-left: 8cm">GESTIÓN 2020</h5>
           
         <br>
        <p class="parrafo" style="text-align:justify">El Departamento de Informática y Sistemas junto a las Carreras de Ing. Informática e Ing. 
           De  Sistemas  de  la  Facultad  de  Ciencias  y  Tecnología,  convoca  al  concurso  de  méritos  y 
           examen de competencia para la provisión de Auxiliares del Departamento, tomando como 
           base los requerimientos que se tienen programados para la gestión 2020.</p>  
        <br>
        <h6>1.&nbsp;&nbsp;REQUERIMIENTOS</h6> 
      </div> <!--FIN DE LA PRIMERA PARTE -->
           <div id="tabla1">
            <table id="requirements-table" class="table table-striped">
               <colgroup>
                  <col width="10%">
                    <col width="15%">
                      <col width="30%">
                        <col width="40%">
                          <col width="45%">
               </colgroup>
                <thead>   
                   <tr>
                     <th>Items</th>
                     <th>Cant.</th>
                     <th>Hrs.Academicas</th>
                     <th>Nombre de la Auxiliatura</th>
                     <th>Cod. de la Auxiliatura</th>
                  </tr>
                </thead>  
                {{-- <input type="text" value="{{$call->requerimientos}}" id="requerimientos"> --}}
                <tbody>
                   @foreach ($call->requerimientos as $requerimiento)   
                    <tr>
                      <td>{{$requerimiento->id}}</td>
                      <td>{{$requerimiento->cantidad_de_auxiliares}}</td>
                      <td>{{$requerimiento->cantidad_horas_academicas}}</td>
                      <td>{{$requerimiento->nombre_auxiliatura}}</td>
                      <td>{{$requerimiento->codigo_auxiliatura}}</td>
                    </tr>
                     @endforeach
                    <tr>
                      <td>Total</td>
                      <td>22 Aux.</td>
                      <td></td>
                      <td></td>
                    </tr>
                </tbody>   
             </table>  
         </div>   
        <br>
      
      <div id = "parte2" class="hoja"> 
               <h6>2.&nbsp;&nbsp;REQUISITOS</h6>
                     <p>{{$call->requisitos}}</p>
               <br>
               <h6>3.&nbsp;&nbsp;DOCUMENTOS A PRESENTAR</h6>
                  <div class="documentos">
                        <p>a)  Presentar solicitud escrita dirigida a la Jefatura de Departamento de Informática y Sistemas 
                        especificando claramente la(s) auxiliatura(s) a la(s) que se postula:</p> 
                        <p>- Código de auxiliatura</p> 
                        <p>- Nombre de la auxiliatura.</p> 
                        <p>b)  Kardex actualizado a la gestión I/2019 (periodos cumplidos a la fecha), expedido por Oficina 
                        de Kardex de la Facultad de Ciencias y Tecnología.</p> 
                        <p>c)  Presentar  certificado  de  condición  de  estudiante  expedido  por  el  Departamento  de 
                        Registros e Inscripciones.</p> 
                        <p>d)  Fotocopia del carnet de identidad.</p> 
                        <p>e)  Certificado de la Biblioteca de la FCyT donde se evidencia que no tiene pendiente deuda de 
                        libros prestados.</p> 
                        <p>f)  Presentar resumen de currículum Vitae de acuerdo alsubtítulo 5 CALIFICACIÓN DE MÉRITOS 
                        de esta convocatoria.</p> 
                        <p>g)  Presentar documentación que respalde el currículum vitae, ORGANIZADO Y SEPARADO de 
                        acuerdo a la tabla de calificación de méritos.</p>  
                     </div>
                     <br>
                     <p class="parrafo" style="text-align:justify"><b>NOTA.-</b>Toda la documentación se legalizará gratuitamente en Secretaria del Departamento 
                        de  Informática  y  Sistemas.  (Presentar  original  y  fotocopias).  La  documentación  no  será 
                        devuelta.</p> 
                     <br>
      </div>{{--FIN SEGUNDA PARTE--}}
      <div id = "parte3" class="hoja"> 
         <h6>4.&nbsp; &nbsp; FECHA Y LUGAR DE PRESENTACIÓN DE DOCUMENTOS </h6>
         <h6>4.1.&nbsp;DE LA FORMA</h6>
         <p  class="parrafo">Presentación de la documentación en sobre manila cerrado y rotulado con:</p>
         <p  class="parrafo">- Nombre y apellidos completos, dirección, teléfono(s) y e-mail del postulante.</p> 
         <p  class="parrafo">- Código(s) de item de la(s) auxiliatura(s) a la(s) que se postula.</p> 
         <p  class="parrafo">- Nombre(s) de la(s) auxiliatura(s) a la(s) que sepresenta.</p>
         <br>
         <h6>4.2.&nbsp;DE LA FECHA Y LUGAR</h6>
         <p  class="parrafo">La documentación deberá ser presentada hasta horas 11:00 del día viernes, 7 de febrero de 2020,
            en Secretaria del Departamento de Informática - Sistemas.</p>
         <br>
         <h6>5.&nbsp;&nbsp;CALIFICACION DE MERITOS</h6>
         <p  class="parrafo" style="text-align:justify">La calificación de méritos se basará en los documentos presentados por el postulante y se 
            realizará sobre la base de 100 puntos que representa el 20% del puntaje final y se ponderará 
            de la siguiente manera.</p>
         <br>
      </div><!--FIN DE LA TERCERA PARTE -->
      <div class="hoja">
      <table id="rendimiento-table" class="table table-striped">
         <colgroup>
            <col width="90%">
              <col width="10%">
         </colgroup>
          <thead>   
             <tr>
               <th>5.1. RENDIMIENTO ACADÉMICO</th>
               <th>65</th>
            </tr>
          </thead>  
          <tbody> 
              <tr>
                <td>a) Promedio general de las materias cursadas (Incluye reprobadas y
                  abandonos)………………………………………………..………………………………....35 %
               </td>
              </tr>
              <tr>
               <td>b) Promedio general de materias en el periodo académico anterior ………………………..…….. 30 %</td>
              </tr>
          </tbody>   
      </table>
   </div>
   <div class="hoja">
      <table id="rendimiento2-table2" class="table table-striped">
         <colgroup>
            <col width="90%">
              <col width="10%">
         </colgroup>
         <thead>
            <tr>
              <th>5.2. EXPERIENCIA GENERAL</th>
              <th>35</th>
           </tr>
         </thead>

         <tbody> 
            <tr>
              <td>Documentos de experiencia en laboratorios: (20)</td>
            </tr>
            <tr>
               <td> a) Auxiliar de Laboratorio Departamento de Informática - Sistemas del item respectivo ...............12
                  <br>
                  a. 2 pts/semestre Auxiliar titular
                  b. 1 pts/semestre Auxiliar Invitado
               </td>
            </tr>
            <tr>
               <td>
                  b) Auxiliares de Practicas Laboratorio Departamento de Informática - Sistemas ………6
                  a. 1 pts/semestre Auxiliar.
               </td>
            </tr>
            <tr>
               <td>
                  c) Otros auxiliares en laboratorios de computación ………………………………………...2
                  a. 1 pts/semestre Auxiliar.
               </td>
            </tr>
            <tr>
             <th>Producción: (5 )</th>
           </tr>
            <tr>
               <td>a) Disertación cursos y/o participación en Proyectos: …………………….……………………………...5 <br>
                  a. 2.5 pts/certificado</td>
             </tr>
            <tr>
             <th>Documentos de experiencia extrauniversitaria y de capacitación: (10)</th>
           </tr>
            <tr>
               <td>a) Experiencia como operador, programador, analista de sistemas, cargo directivo en centro de
                     cómputo. ………………………………………………........................……….....................6 <br>
                     a. 2 puntos por certificado
               </td>
             </tr>
             <tr>
               <td>b) Certificación de capacitación en el área específica expedidos por el sistema
                  universitario ………………………………………………………………………………..........4 <br>
                     a. 2 pts/certificado aprobación <br>
                     b. 1 pts/certificado asistencia 
               </td>
             </tr>
         </tbody>
      </table>  
   </div>
      <div id = "parte4" class="hoja">
         <p  class="parrafo" style="text-align:justify"><b>NOTA.-</b>Todo certificado será ponderado hasta el valor delpuntaje especificado en la tabla.</p>
         <h6>6.&nbsp;&nbsp;CALIFICACIÓN DE CONOCIMIENTOS</h6> 
         <p  class="parrafo" style="text-align:justify">La  calificación  de  conocimientos  se  realiza  sobre  la  base  de  100  puntos,  equivalentes  al  80%  de  la calificación final.</p> 
         <p  class="parrafo" style="text-align:justify">Las  pruebas  para  los  auxiliares  sobre  conocimientos se  realizarán  de  acuerdo  al  temario  y  tabla siguiente.</p> 
      
         <h6> 6.1. &nbsp; PORCENTAJES DE CALIFICACIÓN PARA CADA TIPO DE AUXILIAR</h6> 
         <h6> 6.1.1.  PRUEBAS ESCRITAS</h6>
      </div><!-- FIN DE LA CUARTA PARTE -->
   <div id="pruebas" class="hoja">
      <table  id="pruebas-table" class="table table-striped">
            <tr>
              <td>#</td>
              <td>TEMÁTICA</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>CÓDIGO DE AUXILIATURA</td>
           </tr>
      </table>

      <table id="pruebas-table2" class="table table-striped">
         <thead>
            <tr>
               <td></td>
               <td></td>
               @foreach ($call->requerimientos as $requerimiento)
                <td>{{$requerimiento->codigo_auxiliatura}}</td>
               @endforeach
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>1</td>
               <td>ADM LINUX</td>
               @foreach ($call->requerimientos as $requerimiento)
                   <td></td>
               @endforeach
            </tr>
            <tr>
               <td>2</td>
               <td>REDES NIVEL INTERMEDIO</td>
               @foreach ($call->requerimientos as $requerimiento)
                   <td></td>
               @endforeach
           </tr>
           <tr>
            <td>3</td>
            <td>POSTGRES, MYSQL
                NIVEL INTERMEDIO
            </td>
            @foreach ($call->requerimientos as $requerimiento)
                   <td></td>
            @endforeach
           </tr>
         <tr>
            <td>4</td>
            <td>PROGRAMACIÓN PARA INTERNET,<br>
            LENGUAJES DE PROGRAMACION (JSP,<br>
            JAVASCRIPT, CSS, HTML, PHP, DELPHI)</td>
            @foreach ($call->requerimientos as $requerimiento)
            <td></td>
            @endforeach
        </tr>
        <tr>
            <td>5</td>
            <td>MODELAJE DE APLICACIONES WEB <br>
            (UML),PROCESO UNIFICADO <br>
            ESTRUCTURADO</td>
            @foreach ($call->requerimientos as $requerimiento)
            <td></td>
            @endforeach
         </tr>
         <tr>
            <td>6</td>
            <td>ENSAMBLAJE Y MANTENIMIENTO DE <br>
            COMPUTADORA EN HARDWARE Y <br>
            SOFTWARE</td>
            @foreach ($call->requerimientos as $requerimiento)
            <td></td>
            @endforeach
         </tr>
         <tr>
            <td>7</td>
            <td>ELECTRÓNICA APLICADA <br>
            - Teórico <br>
            - Practico</td>
            @foreach ($call->requerimientos as $requerimiento)
            <td></td>
            @endforeach
         </tr>
         <tr>
            <td>8</td>
            <td>DIDÁCTICA</td>
            @foreach ($call->requerimientos as $requerimiento)
            <td></td>
            @endforeach
      </tr>
   </tbody>
   </table>
   </div>

      <div id = "parte5" class="hoja">
         <br>
         <div id = "elementH"></div>
         <h6> 7.&nbsp;&nbsp; DE LOS TRIBUNALES </h6>
         <p  class="parrafo" style="text-align:justify">Los Honorables Consejos de Carrera de Informática ySistemas designarán respectivamente; para la 
            calificación de méritos 1 docente y 1 delegado estudiante, de la misma manera para la comisión de 
            conocimientos cada consejo designará 1 docente y unestudiante veedor por cada temática.</p> 
         <br>
         <h6> 8.&nbsp;&nbsp;CRONOGRAMA GENERAL</h6>
      </div><!--FIN DE LA QUINTA PARTE -->
            <div class="cronograma">
               <table id="tab_eventos" class="table table-striped p-0">
                  <colgroup>
                     <col width="15%">
                     <col width="20%">
                  </colgroup>
                     <tr>
                     <th>EVENTOS</th>
                     <th>FECHAS</th>
                     <th>LUGAR</th>
                     </tr>
                     @foreach ($call->fechas as $fecha)
                        <tr>
                        <td>{{$fecha->evento}}</td>
                        <td>{{$fecha->fechaI}}</td>
                        <td>{{$fecha->ubicacion}}</td>
                        </tr>
                  @endforeach
               </table>  
            </div>
         <br>
         <h6>9.&nbsp;&nbsp;SELECCIÓN</h6>  
         <br>
         <div class="fecha"> <h6></h6></div>
         <br>
         <br>
      
    <div id="firma" class="hoja">
         <p id="nombre1" class="parrafo"> Lic. Henrry Villarroel Tapia</p> 
         <p id = "nombre2"class="parrafo"> Lic. Yony Montoya Brugos </p>
         <p id="sistemas" class="parrafo" style="margin-left: 7cm; margin-top:5cm; display: inline-block">DIR. ING. SISTEMAS</p> 
         <p id="informatica" class="parrafo" style="margin-left: 12cm; margin-top:-5cm; display: inline-block" > ING. INFORMATICA</p>   
         <br>
         <p id="nombre3" class="parrafo">Ing. Jimmy Villarroel Novillo </p> 
         <p id="infoysis" class="parrafo"><b>DPTO INFORMATICA Y SISTEMAS</b></p>
         <br>
         <p id="nombre4" class="parrafo">Ing. Alfredo Cosio Papadopolis</p> 
         <p id ="decano" class="parrafo"><b>DECANO - FCyT</b></p>
    </div>      
 </body>
</html> 