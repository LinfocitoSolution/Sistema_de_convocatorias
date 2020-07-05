<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script src="{{asset('js/html2canvas.js')}}" type="text/javascript"></script>   

<script> window.onload = async function toPDF(){
  var doc = new jsPDF();
  var elemento1 = document.getElementById('datos');
  var elemento2 = document.getElementById('parte2');
  var specialElementHandlers = {
      '#elementH': function (element, renderer) {
          return true;
      }
  };
  doc.fromHTML(elemento1, 15, 15, {
      'width': 180,
      'elementHandlers': specialElementHandlers
  });
  //SEGUNDO DIV
  doc.addPage();
  doc.fromHTML(elemento2, 15, 15, {
      'width': 180,
      'elementHandlers': specialElementHandlers
  });
  //FIRMAS
  doc.setFontSize(11);
  var n1 = document.getElementById('nombre1');
  var n2 = document.getElementById('nombre2');
  var text1 = n1.textContent;
  var text2 = n2.textContent;
  doc.text(text1,45,160);//string,x,y
  doc.text(text2 ,100,160);
  doc.setFontType('bold');
  var s = document.getElementById('sistemas');
  var i = document.getElementById('informatica');
  var texts = s.textContent;
  var texti = i.textContent;
  doc.text(texts ,46,165);//string,x,y
  doc.text(texti ,101,165);
  doc.setFontType('normal');

  var n3 = document.getElementById('nombre3');
  var n4 = document.getElementById('nombre4');
  var text3 = n3.textContent;
  var text4 = n4.textContent;
  doc.text(text3,40,195);//string,x,y
  doc.text(text4,110,195);
  doc.setFontType('bold');
  var is = document.getElementById('infoysis');
  var de = document.getElementById('decano');
  var textis = is.textContent;
  var textde = de.textContent;
  doc.text(textis ,35,200);//string,x,y
  doc.text(textde ,118,200);
  doc.setFontType('normal');

  //ARRAY DE FIRMAS
  // var x = document.getElementById("firma").querySelectorAll(".fi");
  // for (var i = 0, l = x.length; i < l; i++) 
  // { 
  //   if(i>1)
  //   {
  //     doc.text(x[i].textContent,45,160);//string,x,y
  //   }
  //   else
  //   {
      
  //   }
  // }
  doc.setFontStyle('Arial');
  doc.save('convocatoria.pdf');
  location.href = "/";
}
</script>