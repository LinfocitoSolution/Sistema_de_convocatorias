<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    @include('admin.announcements.plantilla.script')
</head>
<body>
    <div class="container">
        <div class="card-body">
            <div class="hoja" id="datos">  
                <br>
                <div class="text-center">
                    <h4>{{$call->titulo_convocatoria}}</h4>
                    
                </div>                  
                <div class="text-center">
                   
                    <h5>GESTION 2020</h5>                  
                </div>                  
                <br>
               <p class="parrafo" style="text-align:justify">El Departamento de Informática y Sistemas junto a las Carreras de Ing. Informática e Ing. 
                  De  Sistemas  de  la  Facultad  de  Ciencias  y  Tecnología,  convoca  al  concurso  de  méritos  y 
                  examen de competencia para la provisión de Auxiliares del Departamento, tomando como 
                  base los requerimientos que se tienen programados para la gestión 2020.</p>  
               <br>
               <h6>1.&nbsp;&nbsp;REQUERIMIENTOS</h6> 
                  <div id="tabla1">
                   <table id="tab_customers" class="table table-striped p-0">
                      <colgroup>
                         <col width="15%">
                           <col width="20%">
                             <col width="30%">
                               <col width="35%">
                      </colgroup>
                      <thead>   
                       <tr>
                         <th>Items</th>
                         <th>Cantidad</th>
                         <th>Hrs.Academicas</th>
                         <th>Destino</th>
                      </tr>
                    </thead>  
                       
                    <tbody>
                       @foreach ($call->requerimientos as $requerimiento)   
                        <tr>
                          <td>{{$requerimiento->id}}</td>
                          <td>{{$requerimiento->cantidad_de_auxiliares}}</td>
                          <td>{{$requerimiento->cantidad_horas_academicas}}</td>
                          <td>{{$requerimiento->nombre_auxiliatura}}</td>
                        </tr>
                         @endforeach
                        <tr>
                          <td>Total</td>
                          <td>16 Aux.</td>
                          <td></td>
                          <td></td>
                        </tr>
                    </tbody>   
                 </table>  
             </div>   
            <br>
            <h6>2.&nbsp;&nbsp;REQUISITOS</h6>
                  <p>{{$call->requisitos}}</p>
            <br>
            <h6>3.&nbsp;&nbsp;DOCUMENTOS A PRESENTAR</h6>
               <div class="documentos">
                <p>a)  Presentar Solicitud escrita para la(s) auxiliatura(s)a la(s) que se postula,dirigida  
                       a la Jefatura de Departamento.</p> 
                <p>b)  Presentar certificado de condición de estudiante expedido por el Departamento
                   de Registros e Inscripciones.</p> 
                <p>c)  Kardex actualizado a la gestión I/2019 (periodos cumplidos a la fecha), expedido por Oficina 
                de Kardex de la Facultad de Ciencias y Tecnología.</p>  
                <p>d)  Fotocopia del carnet de identidad.</p> 
                <p>e)  Certificado expedido por la biblioteca de la Facultad De Ciencias y Tecnología de 
                    no tener deudas de libros.</p>
                <p>f)  Kardex actualizado a la gestión I/2019 (periodos cumplidos a la fecha), expedido por Oficina 
                   de Kardex de la Facultad de Ciencias y Tecnología.</p>     
                <p>g)  Presentar resumen de currículum Vitae de acuerdo alsubtítulo 6 DE LA CALIFICACIÓN DE MÉRITOS 
                de esta convocatoria.</p> 
                <p>h)  Presentar documentación que respalde el currículum vitae, ORGANIZADO Y SEPARADO de 
                acuerdo a la tabla de calificación de méritos.</p>
               </div>
           <br>
            <p class="parrafo" style="text-align:justify"><b>NOTA.-</b>Toda la documentación se legalizará gratuitamente en Secretaria del Departamento 
               de  Informática  y  Sistemas.  (Presentar  original  y  fotocopias).  La  documentación  no  será 
               devuelta.</p> 
           <br>
        
              <br>
              <h6>4.&nbsp;&nbsp;DE LA FORMA</h6>
              <p  class="parrafo"> Presentación de la documentación en sobre manila cerrado y rotulado con:</p>
              <p  class="parrafo">- Nombre y apellidos completos, dirección, teléfono(s) y e-mail del postulante.</p> 
              <p  class="parrafo">- Código(s) de item de la(s) auxiliatura(s) a la(s) que se postula.</p> 
              <p  class="parrafo">- Nombre(s) de la(s) auxiliatura(s) a la(s) que sepresenta.</p>
              <br>
           
             <h6>5.&nbsp;&nbsp;FECHA DE PRESENTACIÓN</h6>
              <p class="parrafo">Presentación en sobre Manila cerrado y rotulado con los siguientes datos:</p>
              <p class="parrafo">Nombre y Apellido,dirección,teléfono y e-mail; hasta horas 11:00 del día viernes 7 de febrero de 2020
                  en Secretaria del Departamento de Informatica-Sistemas.</p>
              <!--Fin de la primera parte-->
              
           
                  <h6>6.&nbsp;&nbsp;CALIFICACION DE MERITOS</h6>
                  <p  class="parrafo" style="text-align:justify">La calificación de méritos se basará en los documentos presentados por el postulante y se 
                            realizará sobre la base de 100 puntos que representa el 20% del puntaje final y se ponderará 
                            de la siguiente manera.</p>
                             <br>
                           <br>
                           <br>
                           <br>
                           <br>
                           <br>
                           <br>
                           <br>
                           <br>
                           <br>
                           <br>
                                  <table class="table" border="1px">
                                   <colgroup>
                                       <col width="25%">
                                         <col width="35%">
                                           <col width="40%">
                                    </colgroup>   
                                      <thead>
                                          <tr>
                                              <td colspan="2"><strong>DESCRIPCION DE MERITOS</strong></td>
                                              <td><strong>PORCENTAJE</strong></td>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td colspan="2"><strong>RENDIMIENTO ACADEMICO</strong></td>
                                              <td align="right"><strong>65%</strong></td>
                                          </tr>
                                          <tr>
                                              <td colspan="3" scope="rowgroup">
                                                  <p> a.- Promedio aprobacion de la materia a la que postula incluye reprobados y abandonados</p>
                                                  <p> a.- Promedio aprobacion de la materia a la que postula incluye reprobados y abandonados</p>
                                              </td>
                                          </tr>
                                           <tr>
                                              <th colspan="3" scope="rowgroup"><strong>6.2.EXPERIENCIA GENERAL</strong></th>
                                          </tr>
                                           <tr>
                                              <td colspan="3"><p> Se califica sobre la base de tablas elaboradas por el Departamento de informatica ySistemas conforme a desglose</p></td>
                                          </tr>
                                           <tr>
                                              <td colspan="2"><strong>6.2.1.Documentos de experiencia universitaria</strong></td>
                                              <td align="right"><strong>25%</strong></td>
                                          </tr>
                                           <tr>
                                              <td colspan="3">
                                                  <P>a)Auxiliar docente en materias del área troncal: …..…….…… 15% </P>
                                                  <p style="padding-left: 60px">a.-2 ptos/semestre y materia de aux. titular</p>
                                                  <p style="padding-left: 60px">b.-1 ptos/semestre y materia de aux. invitado </p>
                                                  <p style="padding-left: 60px">c.-1 ptos/semestre y materia de aux. de practicas </p>
                                                  <P>b.-Auxiliar en otras ramas o carreras:…………………………………. 5%</P>
                                                  <p style="padding-left: 60px">a.-1 pto/semestre x materia de aux. invitado o titular</p>
                                                  <p style="padding-left: 60px">b.-1 pto/semestre x materia de aux. de practicas  </p>
                                                  <P>c.-) Disertación cursillos y/o participación en Proyectos:……... 5%</P>
                                                  <p style="padding-left: 60px">a.-</p>
                                                  <p style="padding-left: 60px">b.-</p>
                                                  <P>d.-</P>
                                              </td>
                                          </tr>
                                           <tr>
                                              <td colspan="2" scope="rowgroup"><strong>6.2.2.Documentos de experiencia extrauniversitaria:</strong> </td>
                                              <td align="right"><strong>10%</strong></td>
                                          </tr>
                                           <tr>
                                              <td colspan="3"><P>a.-</P>
                                                  <p style="padding-left: 40px">a.-</p>
                                                  <p style="padding-left: 40px">b.-</p>
                                                  <p style="padding-left: 40px">c.-</p>
                                                  <P>b.-</P>
                                                  <P>c.-</P>
                                                  <P>d.-</P>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                                
       
               <h6>7.&nbsp;CLALIFICACIÓN DE CONOCIMIENTOS</h6>
              <p  class="parrafo" style="text-align:justify">La calificación de conocimientos se realiza sobre la base de 100 puntos, equivalentes al 80%
                  de la calificación final. Se realizarán las siguientes pruebas:</p>
              <p> a) Examen escrito de conocimientos(prueba de selección)..........40%</p>
              
              <p> b) Examen oral, donde se evaluarán aspectos didácticos y pedagógicos sobre
                  conocimiento y dominio de la materia.Tendrá una duración máxima de 25 minutos:
                      15 minutos de exposición y 10 minutos de 
                      preguntas..............................................................60%</p> 
                  <br>
        
           <h6> 8.&nbsp;&nbsp;DE LOS TRIBUNALES </h6>
          <p  class="parrafo" style="text-align:justify">Los Honorables Consejos de Carrera de Informática y Sistemas designarán respectivamente; para la 
             calificación de méritos 1 docente y 1 delegado estudiante,  para la comisión de 
             conocimientos 1 docente por asignatura convocada más un estudiante veedor.</p> 
          <br>
        </div>
           <div id = "parte2"> 
           <h6>9.&nbsp; &nbsp; FECHA DE LAS PRUEBAS </h6>
           <p  class="parrafo" style="text-align:justify">Las pruebas escritas serán sobre el contenido de la materia a la que postula y la nota de
            aprobación mayor o igual a 51.
           Las pruebas orales, se tomarán solo a los postulantes que hayan vencido la prueba escrita
           de acuerdo a pertinencia y contenido de la materia a la que se postula.</p>
           <p class="parrafo">Fechas importante a conciderar:</p>
       
             <table>
                <tr>
                <th>EVENTOS</th>
                <th>FECHAS</th>
                </tr>
                @foreach ($call->fechas as $fecha)
                   <tr>
                   <td>{{$fecha->evento}}</td>
                   <td>{{$fecha->fechaI}}</td>
                   </tr>
             @endforeach
             </table>  
           
            
            <br>
            <p  class="parrafo" style="text-align:justify"><b>NOTA.-</b>Para Introducción a la Programación y Elementos de Programación y Estructura de
               Datos, el lenguaje es Java como tecnología de aplicación en la toma de exámenes. Para
               Computación I se considera el entorno Visual Basic como tecnología de aplicación en la
               toma de exámenes.</p>
            
          <div id = "elementH"></div>
          
       
       
          <br>
          <h6>10.&nbsp;&nbsp;DEL NOMBRAMIENTO</h6>
          <P class="parrafo" style="text-align:justify">Los nombramientos de auxiliar universitario titular recaerán sobre aquellos postulantes que
           hubieran aprobado y obtenido mayor calificación. Caso contrario se procederá con el
           nombramiento de aquel que tenga la calificación mayor como auxiliar invitado.</p>
           <p class="parrafo">Cabe resaltar que un auxiliar invitado solo tendrá nombramiento por los periodos
               académicos del semestre I y II de 2020.</p>
           <br>
          <div class="fecha"> <h6>Fecha:.............</h6></div>
          <br>
          <br>
       </div>
        
        <div id="firma">
             <p id="nombre1" class="parrafo"> Lic. Henrry Villarroel Tapia</p> 
             <p id = "nombre2"class="parrafo"> Lic. Yony Montoya Brugos </p>
             <p id="sistemas" class="parrafo" style="margin-left: 7cm; margin-top:5cm; display: inline">DIR. ING. SISTEMAS</p> 
             <p id="informatica" class="parrafo" style="margin-left: 20cm; margin-top:-2cm; display: inline" > ING. INFORMATICA</p>   
             <br>
             <p id="nombre3" class="parrafo">Ing. Jimmy Villarroel Novillo </p> 
             <p id="infoysis" class="parrafo"><b>DPTO INFORMATICA Y SISTEMAS</b></p>
             <br>
             <p id="nombre4" class="parrafo">Ing. Alfredo Cosio Papadopolis</p> 
             <p id ="decano" class="parrafo"><b>DECANO - FCyT</b></p>
        </div> 
        </div>
    </div>
    
</body>
<a href="javascript:toPDF()">PDF</a>
</html>