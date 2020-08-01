<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convocatoria Docencia</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/convo/stil.css')}}" rel="stylesheet"> 

    @include('admin.announcements.plantilla.scriptDoc')
</head>
<body>
    <script>
        const conv = {!! json_encode($call) !!};
        // console.log(conv);
    </script>
                <h4 style="margin-left: 8cm" id="titulo">{{$call->titulo_convocatoria}}</h4>
                 <h5 style="margin-left: 8cm" id="gestion">GESTIÓN 2020</h5>
            <div class="hoja" id="datos">  
                <br>
                <br>
               <p class="parrafo" style="text-align:justify">El Departamento de Informática y Sistemas junto a las Carreras de Ing. Informática e Ing. 
                  De  Sistemas  de  la  Facultad  de  Ciencias  y  Tecnología,  convoca  al  concurso  de  méritos  y 
                  examen de competencia para la provisión de Auxiliares del Departamento, tomando como 
                  base los requerimientos que se tienen programados para la gestión 2020.</p>  
               <br>
               <h6>1.&nbsp;&nbsp;REQUERIMIENTOS</h6> 
            </div> <!-- FIN DE LA PRIMERA PARTE -->

            <div id="tabla1">
                   <table id="requirements-table" class="table table-striped">
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
        <div id="parte2">
            <h6>2.&nbsp;&nbsp;REQUISITOS</h6>
                        <p>{{$call->requisitos}}</p><br>
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
        </div><!--Fin de la segunda parte-->

        <div id="parte3">
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
        </div>
        <div id="parte3-1">
            <h6>6.&nbsp;&nbsp;CALIFICACION DE MERITOS</h6>
            <p  class="parrafo" style="text-align:justify">La calificación de méritos se basará en los documentos presentados por el postulante y se 
                    realizará sobre la base de 100 puntos que representa el 20% del puntaje final y se ponderará 
                    de la siguiente manera.</p>
        </div>
        <!-- INICIO DE LA TABLA MERITOS -->
        <table class="table table-bordered table-striped table-sm" id="tabla2">
            <thead>
            
            </thead>
            <tbody>
               @foreach($meritos as $merito)
                     <tr>
                        <th><strong>Nombre</strong></th>
                        <th><strong>Puntaje</strong></th>
                     </tr>
                     <tr>
                        <th><strong>{{$merito->name}}</strong></th>
                        <th><strong>{{$merito->score}}</strong></th>
                     </tr>
                     @foreach($submeritos as $submerito)
                        @if($submerito->merito_id==$merito->id)
                           <tr>
                              <th>{{$submerito->name}}</th>
                              <th>{{$submerito->score}}</th>
                           </tr>
                           <tr>
                              <th>Descripción</th>   
                              <th></th>
                           </tr>
                              @foreach($descripciones as $desc)
                                 @if($desc->submerito_id==$submerito->id)
                                    @if ($desc->tipo_descripcion == 'documentos')
                                       <td>{{$desc->descripcion}}</td>
                                       <td>{{$desc->score}}</td>             
                                    @endif
                                 @endif
                              @endforeach
                           </tr>
                        @endif
                     @endforeach
               @endforeach
            </tbody>
       </table>
        
            
            <div id="parte4">
                <h6>7.&nbsp;CALIFICACIÓN DE CONOCIMIENTOS</h6>
                <p  class="parrafo" style="text-align:justify">La calificación de conocimientos se realiza sobre la base de 100 puntos, equivalentes al 80%
                    de la calificación final. Se realizarán las siguientes pruebas:</p>
                            <p>a) Examen escrito de conocimientos(prueba de selección)..........40%</p>
                
                            <p>b) Examen oral, donde se evaluarán aspectos didácticos y pedagógicos sobre
                            conocimiento y dominio de la materia.Tendrá una duración máxima de 25 minutos:
                            15 minutos de exposición y 10 minutos de 
                            preguntas...................................................................60%</p> 
                    <br>
            
                <h6> 8.&nbsp;&nbsp;DE LOS TRIBUNALES </h6>
                <p  class="parrafo" style="text-align:justify">Los Honorables Consejos de Carrera de Informática y Sistemas designarán respectivamente; para la 
                    calificación de méritos 1 docente y 1 delegado estudiante,  para la comisión de 
                    conocimientos 1 docente por asignatura convocada más un estudiante veedor.</p> 
                <br> 
                <h6>9.&nbsp; &nbsp; FECHA DE LAS PRUEBAS </h6>
                <p  class="parrafo" style="text-align:justify">Las pruebas escritas serán sobre el contenido de la materia a la que postula y la nota de
                    aprobación mayor o igual a 51.
                Las pruebas orales, se tomarán solo a los postulantes que hayan vencido la prueba escrita
                de acuerdo a pertinencia y contenido de la materia a la que se postula.</p>
                <p class="parrafo">Fechas importante a conciderar:</p>
            </div>

            <div id="parte5">
                    <p  class="parrafo" style="text-align:justify"><b>NOTA.-</b>Para Introducción a la Programación y Elementos de Programación y Estructura de
                    Datos, el lenguaje es Java como tecnología de aplicación en la toma de exámenes. Para
                    Computación I se considera el entorno Visual Basic como tecnología de aplicación en la
                    toma de exámenes.</p>
            
                <br>
                <h6>10.&nbsp;&nbsp;DEL NOMBRAMIENTO</h6>
                <P class="parrafo" style="text-align:justify">Los nombramientos de auxiliar universitario titular recaerán sobre aquellos postulantes que
                hubieran aprobado y obtenido mayor calificación. Caso contrario se procederá con el
                nombramiento de aquel que tenga la calificación mayor como auxiliar invitado.</p>
                <p class="parrafo">Cabe resaltar que un auxiliar invitado solo tendrá nombramiento por los periodos
                    académicos del semestre I y II de 2020.</p>
                <br>
                <h6 id="date"> </h6>
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
</body>
</html>