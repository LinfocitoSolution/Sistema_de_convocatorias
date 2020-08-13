<script src="{{asset('https://unpkg.com/jspdf@1.5.3/dist/jspdf.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.0.16/jspdf.plugin.autotable.js')}}"></script>
<script src="{{asset('js/html2canvas.js')}}" type="text/javascript"></script>   

<script> window.onload = async function toPDF(){
  var doc = new jsPDF('p', 'pt', 'letter');
  var pageHeight = doc.internal.pageSize.height || doc.internal.pageSize.getHeight();
  var pageWidth = doc.internal.pageSize.width || doc.internal.pageSize.getWidth();
  doc.setFont("Times");
  doc.setFontSize(15);
  doc.setFontType('bold');
  var titulo = document.getElementById('titulo');
  var gestion = document.getElementById('gestion');//12

  doc.text(titulo.textContent, pageWidth/2, 40, 'center');
  doc.text(gestion.textContent, pageWidth/2,  55, 'center');

  doc.setFontType('normal');

  var elemento1 = document.getElementById('datos');
  var elemento2 = document.getElementById('parte2');
  var elemento3 = document.getElementById('parte3');
  var elemento4 = document.getElementById('parte4');
  var elemento5 = document.getElementById('parte5');
/*tabla   
var elem = document.getElementById('tabla1');
var res = doc.autoTableHtmlToJson(elem);
doc.autoTable(res.columns, res.data);*/

  var specialElementHandlers = {
      '#bypassme': function (element, renderer) {
          return true;
      }
  };
  margins = {
        top: 50,
        bottom: 60,
        left: 40,
        width: 522  
    };

  doc.fromHTML(elemento1, margins.left, margins.top+30, {
      'width': margins.width,
      'elementHandlers': specialElementHandlers
  });

  var res = doc.autoTableHtmlToJson(document.getElementById("requirements-table"));
  doc.autoTable(res.columns, res.data, {margin: {top: 215}});

  //SEGUNDO DIV
  doc.addPage();
  doc.fromHTML(elemento2, margins.left, margins.top, {
      'width': margins.width,
      'elementHandlers': specialElementHandlers
  });
  //TERCER DIV
  doc.addPage();
  doc.fromHTML(elemento3, margins.left, margins.top, {
      'width': margins.width,
      'elementHandlers': specialElementHandlers
  });
  doc.addPage();
  //AGREAGANDO TABLAS
  var tab1 = doc.autoTableHtmlToJson(document.getElementById("rendimiento-table"));
  doc.autoTable(tab1.columns, tab1.data, {margin: {top: 50},styles: {fontSize: 9, font: 'Times'}});

//   var tab2 = doc.autoTableHtmlToJson(document.getElementById("rendimiento2-table2"));
//   doc.autoTable(tab2.columns, tab2.data, {margin: {top: 300}});

  //CUARTO DIV
  doc.addPage();
  doc.fromHTML(elemento4, margins.left, margins.top, {
      'width': margins.width,
      'elementHandlers': specialElementHandlers
  });
  //TERCER TABLA
  var tab3 = doc.autoTableHtmlToJson(document.getElementById("pruebas-table"));
  doc.autoTable(tab3.columns, tab3.data, {margin: {top: 260},styles: {fontSize: 8, font: 'Times'}});
//   var tab4 = doc.autoTableHtmlToJson(document.getElementById("pruebas-table2"));
//   doc.autoTable(tab4.columns, tab4.data, {margin: {top: 315}});

  //QUINTO DIV
  doc.addPage();
  doc.fromHTML(elemento5, margins.left, margins.top, {
      'width': margins.width,
      'elementHandlers': specialElementHandlers
  });

  var res = doc.autoTableHtmlToJson(document.getElementById("tab_eventos"));
  doc.autoTable(res.columns, res.data, {margin: {top: 190}});


  var fecha = {!! json_encode($call->gestion) !!};
  var y = fecha.substr(0,4);
  var m = parseInt(fecha.substr(5,7));
  var d = parseInt(fecha.substr(8,10));
  var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
  doc.setFontType('normal');
  doc.setFontStyle('Times');
  doc.setFontSize(12);
  doc.text("Cochabamba, " + d + " de " + meses[m-1] + " de " + y, 60, 400);


  //FIRMAS
  doc.setFontSize(11);
  var n1 = document.getElementById('nombre1');
  var n2 = document.getElementById('nombre2');
  var text1 = n1.textContent;
  var text2 = n2.textContent;
  doc.text(text1,100,500);//string,x,y
  doc.text(text2 ,400,500);
  doc.setFontType('bold');
  var s = document.getElementById('sistemas');
  var i = document.getElementById('informatica');
  var texts = s.textContent;
  var texti = i.textContent;
  doc.text(texts ,99,515);//string,x,y
  doc.text(texti ,399,515);
  doc.setFontType('normal');

  var n3 = document.getElementById('nombre3');
  var n4 = document.getElementById('nombre4');
  var text3 = n3.textContent;
  var text4 = n4.textContent;
  doc.text(text3,100,700);//string,x,y
  doc.text(text4,400,700);
  doc.setFontType('bold');
  var is = document.getElementById('infoysis');
  var de = document.getElementById('decano');
  var textis = is.textContent;
  var textde = de.textContent;
  doc.text(textis ,100,715);//string,x,y
  doc.text(textde ,399,715);
  doc.setFontType('normal');
  doc.setFontStyle('Times');
  var titulo = {!! json_encode($call->titulo_convocatoria) !!};
  doc.save(titulo);
  location.href = "/";
}
</script>