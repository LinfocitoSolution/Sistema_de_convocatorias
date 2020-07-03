<!doctype html>
<html>
 <head>
    <title>Convocatoria</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/convo/stil.css')}}" rel="stylesheet">    
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
    <script src="{{asset('js/html2canvas.js')}}" type="text/javascript"></script>        
    @include('admin.announcements.plantilla.script')
 </head>  
 <body>
   <div class="hoja" id="datos">  
         <br>
           <h2 style="margin-left: 8cm">TITULO DE LA CONVOCATORIA</h2>
           <h3 style="margin-left: 12cm">GESTION 2020</h3>
           
         <br>
        <p>El Departamento de Informática y Sistemas junto a las Carreras de Ing. Informática e Ing. 
           De  Sistemas  de  la  Facultad  de  Ciencias  y  Tecnología,  convoca  al  concurso  de  méritos  y 
           examen de competencia para la provisión de Auxiliares del Departamento, tomando como 
           base los requerimientos que se tienen programados para la gestión 2020.</p>  
        <br>
        <h4>1.&nbsp;&nbsp;REQUERIMIENTOS</h4> 
           <div class="tabla1">

           </div>  
        <br>
        <h4>2.&nbsp;&nbsp;REQUISITOS</h4>
           <div class="requisito">

           </div>
        <br>
        <h4>3.&nbsp;&nbsp;DOCUMENTOS A PRESENTAR</h4>
           <div class="documentos">
  
           </div>
       <br>
        <p><b>NOTA.-</b>Toda la documentación se legalizará gratuitamente en Secretaria del Departamento 
           de  Informática  y  Sistemas.  (Presentar  original  y  fotocopias).  La  documentación  no  será 
           devuelta.</p> 
       <br>
       <h4>4.&nbsp; &nbsp; FECHA Y LUGAR DE PRESENTACIÓN DE DOCUMENTOS </h4>
       <h4>4.1.&nbsp;DE LA FORMA</h4>
       <p>&nbsp;Presentación de la documentación en sobre manila cerrado y rotulado con: </p>
       <p>
            &nbsp;&nbsp;&nbsp;    - Nombre y apellidos completos, dirección, teléfono(s) y e-mail del postulante, 
        <br>&nbsp;&nbsp;&nbsp; - Código(s) de item de la(s) auxiliatura(s) a la(s) que se postula. 
        <br>&nbsp;&nbsp;&nbsp; - Nombre(s) de la(s) auxiliatura(s) a la(s) que sepresenta. 
      </p>
      <br>
      <h4>5.&nbsp;&nbsp;CALIFICACION DE MERITOS</h4>
      <p>La calificación de méritos se basará en los documentos presentados por el postulante y se 
         realizará sobre la base de 100 puntos que representa el 20% del puntaje final y se ponderará 
         de la siguiente manera. </p>
      <br>
      <p><b>NOTA.-</b>Todo certificado será ponderado hasta el valor delpuntaje especificado en la tabla.</p>
      <h4>6.&nbsp;&nbsp;CALIFICACIÓN DE CONOCIMIENTOS</h4> 
      <p>La  calificación  de  conocimientos  se  realiza  sobre  la  base  de  100  puntos,  equivalentes  al  80%  de  la 
         calificación final.</p> 
      <p>Las  pruebas  para  los  auxiliares  sobre  conocimientos se  realizarán  de  acuerdo  al  temario  y  tabla 
         siguiente.</p> 
    </div> 
    {{-- FIN DE LA PRIMERA PARTE --}}
    <div id = "parte2"> 
      <h4> 6.1. &nbsp; PORCENTAJES DE CALIFICACIÓN PARA CADA TIPO DE AUXILIAR</h4> 
      <h4> 6.1.1.  PRUEBAS ESCRITAS</h4>
      <br>
      <div id = "elementH"></div>
      <h4> 7.&nbsp;&nbsp; DE LOS TRIBUNALES </h4>
      <p>Los Honorables Consejos de Carrera de Informática ySistemas designarán respectivamente; para la 
         calificación de méritos 1 docente y 1 delegado estudiante, de la misma manera para la comisión de 
         conocimientos cada consejo designará 1 docente y unestudiante veedor por cada temática.</p> 
      <br>
      <h4> 8.&nbsp;&nbsp;CRONOGRAMA GENERAL</h4>
         <div class="cronograma">

         </div>
      <br>
      <h4>9.&nbsp;&nbsp;SELECCIÓN</h4>  
      <br>
      <div class="fecha"> <h3>Fecha:.............</h3></div>
      <br>


      <br>
    </div>{{--FIN SEGUNDA PARTE--}}
    <div id="firma">
         <p id="nombre1" class="fi"> Lic. Henrry Villarroel Tapia</p> 
         <p id = "nombre2"class="fi"> Lic. Yony Montoya Brugos </p>
         <p id="sistemas" class="fi" style="margin-left: 7cm; margin-top:5cm; display: inline">DIR. ING. SISTEMAS</p> 
         <p id="informatica" class="fi" style="margin-left: 20cm; margin-top:-2cm; display: inline"" > ING. INFORMATICA</p>   
         <br>
         <p id="nombre3" class="fi">Ing. Jimmy Villarroel Novillo </p> 
         <p id="infoysis" class="fi"><b>DPTO INFORMATICA Y SISTEMAS</b></p>
         <br>
         <p id="nombre4" class="fi">Ing. Alfredo Cosio Papadopolis</p> 
         <p id ="decano" class="fi"><b>DECANO - FCyT</b></p>
    </div>      
 </body>
    <a href="javascript:toPDF()">PDF</a>
</html> 