<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.0.16/jspdf.plugin.autotable.js"></script>
<script src="{{asset('js/html2canvas.js')}}" type="text/javascript"></script>   

<script> window.onload = async function toPDF(){
    var doc = new jsPDF('p', 'pt', 'letter');
    var elemento1 = document.getElementById('datos');
    var elemento2 = document.getElementById('parte2');
    var elemento3 = document.getElementById('parte3');
    var elemento31 = document.getElementById('parte3-1')
    var elemento4 = document.getElementById('parte4');
    var elemento5 = document.getElementById('parte5');
    var res = doc.autoTableHtmlToJson(document.getElementById("requirements-table"));
    doc.autoTable(res.columns, res.data, {margin: {top: 215}});

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
    doc.fromHTML(elemento1, margins.left, margins.top, {
        'width': margins.width,
        'elementHandlers': specialElementHandlers
    });
    doc.fromHTML(elemento2, margins.left, margins.top+250, {
        'width': margins.width,
        'elementHandlers': specialElementHandlers
    });
    doc.addPage();
    doc.fromHTML(elemento3, margins.left, margins.top, {
        'width': margins.width,
        'elementHandlers': specialElementHandlers
    });
    var columns = ["Evento", "Fecha inicial", "Fecha final", "Ubicación"];
    var requirements = {!! json_encode($call->fechas) !!};
    var data = []
    for(var i=0; i<requirements.length; i++)
    {
        data.push([requirements[i].evento,requirements[i].fechaI,requirements[i].fechaF,
                requirements[i].ubicacion]);
    }
    console.log(data);
    doc.autoTable(columns,data,
    { margin:{ top: 270 }});

    doc.fromHTML(elemento31, margins.left, 380, {
        'width': margins.width,
        'elementHandlers': specialElementHandlers
    });
    doc.addPage();
    var res2 = doc.autoTableHtmlToJson(document.getElementById("tabla2"));
    doc.autoTable(res2.columns, res2.data, {margin: {top: 100}});
    
    doc.addPage();
    doc.fromHTML(elemento4, margins.left, margins.top, {
      'width': margins.width,
      'elementHandlers': specialElementHandlers
  });
    var columns2 = ["Evento", "Fecha inicial"];
    var requirements2 = {!! json_encode($call->fechas) !!};
    var data2 = []
    for(var i=0; i<requirements2.length; i++)
    {
        data2.push([requirements2[i].evento,requirements2[i].fechaI]);
    }
    console.log(data2);
    doc.autoTable(columns2,data2,
    { margin:{ top: 480 }});

      //QUINTO DIV
    doc.addPage();
    doc.fromHTML(elemento5, margins.left, margins.top, {
        'width': margins.width,
        'elementHandlers': specialElementHandlers
    });

    var n =  new Date();
    var y = n.getFullYear();
    var m = n.getMonth();
    var d = n.getDate();
    var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    doc.setFontType('normal');
    doc.setFontStyle('Arial');
    doc.setFontSize(12);
    doc.text("Cochabamba, " + d + " de " + meses[m] + " de " + y, 60, 260);

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
    doc.setFontStyle('Arial');
    setDate();
    doc.save('convocatoria.pdf');
    // location.href = "/";
</script>

<script> function setDate(){
    var n =  new Date();
    var y = n.getFullYear();
    var m = n.getMonth();
    var d = n.getDate();
    var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    document.getElementById("date").innerHTML = "Cochabamba, " + d + " de " + meses[m] + " de " + y;
}
</script>