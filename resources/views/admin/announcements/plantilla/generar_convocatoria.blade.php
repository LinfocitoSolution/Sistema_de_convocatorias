<!doctype html>
<html>
 <head>
    <title>Convocatoria</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/convo/stil.css')}}" rel="stylesheet">    
        
    @include('admin.announcements.plantilla.script')
 </head>  
 <body>
   <div class="hoja" id="datos">  
         <br>
           <h4 style="margin-left: 8cm">{{$call->titulo_convocatoria}}</h4>
           <h5 style="margin-left: 10cm">GESTION 2020</h5>
           
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
    </div> <<!--FIN DE LA PRIMERA PARTE -->
    <div id = "parte2"> 
       <h6>4.&nbsp; &nbsp; FECHA Y LUGAR DE PRESENTACIÓN DE DOCUMENTOS </h6>
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
       <h6>4.1.&nbsp;DE LA FORMA</h6>
       <p  class="parrafo">Presentación de la documentación en sobre manila cerrado y rotulado con:</p>
       <p  class="parrafo">- Nombre y apellidos completos, dirección, teléfono(s) y e-mail del postulante.</p> 
       <p  class="parrafo">- Código(s) de item de la(s) auxiliatura(s) a la(s) que se postula.</p> 
       <p  class="parrafo">- Nombre(s) de la(s) auxiliatura(s) a la(s) que sepresenta.</p>
       <br>
        <h6>5.&nbsp;&nbsp;CALIFICACION DE MERITOS</h6>
        <p  class="parrafo" style="text-align:justify">La calificación de méritos se basará en los documentos presentados por el postulante y se 
           realizará sobre la base de 100 puntos que representa el 20% del puntaje final y se ponderará 
           de la siguiente manera.</p>
        <br>
        <p  class="parrafo" style="text-align:justify"><b>NOTA.-</b>Todo certificado será ponderado hasta el valor delpuntaje especificado en la tabla.</p>
        <h6>6.&nbsp;&nbsp;CALIFICACIÓN DE CONOCIMIENTOS</h6> 
        <p  class="parrafo" style="text-align:justify">La  calificación  de  conocimientos  se  realiza  sobre  la  base  de  100  puntos,  equivalentes  al  80%  de  la calificación final.</p> 
        <p  class="parrafo" style="text-align:justify">Las  pruebas  para  los  auxiliares  sobre  conocimientos se  realizarán  de  acuerdo  al  temario  y  tabla siguiente.</p> 
    
      <h6> 6.1. &nbsp; PORCENTAJES DE CALIFICACIÓN PARA CADA TIPO DE AUXILIAR</h6> 
      <h6> 6.1.1.  PRUEBAS ESCRITAS</h6>
      <br>
      <div id = "elementH"></div>
      <h6> 7.&nbsp;&nbsp; DE LOS TRIBUNALES </h6>
      <p  class="parrafo" style="text-align:justify">Los Honorables Consejos de Carrera de Informática ySistemas designarán respectivamente; para la 
         calificación de méritos 1 docente y 1 delegado estudiante, de la misma manera para la comisión de 
         conocimientos cada consejo designará 1 docente y unestudiante veedor por cada temática.</p> 
      <br>
   </div>{{--FIN SEGUNDA PARTE--}}
   <div id = "parte3"> 
      <h6> 8.&nbsp;&nbsp;CRONOGRAMA GENERAL</h6>
         <div class="cronograma">

         </div>
      <br>
      <h6>9.&nbsp;&nbsp;SELECCIÓN</h6>  
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
 </body>
    <a href="javascript:toPDF()">PDF</a>
</html> 