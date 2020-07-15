  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.0.16/jspdf.plugin.autotable.js"></script>
  <script src="{{asset('jquery/jquery-3.4.1.slim.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
  <link href="{{URL::asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />
  <script src="{{URL::asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script>

  <script> async function save(){
    var doc = new jsPDF('l', 'pt', 'letter');
    // doc.setFontType('normal');
    doc.setFontStyle('Arial');
    doc.setFontSize(25);
    console.log('test');
    doc.setFontType('bold');
    
    var list = document.getElementById("requerimientos");
    var selectedValue = list.options[list.selectedIndex].value;
    var selectedText = list.options[list.selectedIndex].text;
    doc.text("Aplica a: ".concat(selectedText),70, 65);
    doc.text("Código auxiliatura: ".concat(selectedValue), 70, 90);

    doc.text("Nombre: ".concat(document.getElementById("name").value) , 70,115);
    doc.text("Apellido: ".concat(document.getElementById("lastname").value) , 70,140);
    doc.text("Dirección: ".concat(document.getElementById("direccion").value) , 70,165);
    doc.text("Teléfono: ".concat(document.getElementById("telefono").value) , 70,190);
    doc.text("Email: ".concat(document.getElementById("email").value) , 70,215);
    
    var carrera = document.getElementById("carrera");
    var selectedVal = carrera.options[carrera.selectedIndex].value;
    var selectedT = carrera.options[carrera.selectedIndex].text;
    doc.text("Carrera: ".concat(selectedT),70, 240);

    doc.save('rotulo.pdf');
   }
  </script>

  <script> function getPdf(){
    var data = document.getElementById('datos');
  
        var pdf = new jsPDF('p', 'pt', 'letter');
        // source = $('#HTMLtoPDF')[0];
        var source = document.getElementById('datos');
        specialElementHandlers = {
          '#bypassme': function(element, renderer){
            return true
          }
        }
        margins = {
            top: 50,
            left: 60,
            width: 545
          };
        pdf.fromHTML(
            source // HTML string or DOM elem ref.
            , margins.left // x coord
            , margins.top // y coord
            , {
              'width': margins.width // max width of content on PDF
              , 'elementHandlers': specialElementHandlers
            },
            function (dispose) {
              // dispose: object with X, Y of the last line add to the PDF
              //          this allow the insertion of new lines after html
                pdf.save('html2pdf.pdf');
              }
          )		
  }
  </script>

  <script>
    $(function () {
    $('[data-toggle="popover"]').popover({
        placement:"right",
        trigger:"hover"
    })
    })
  </script>

  <script>
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
     })
  </script> 

  <script>
    function mostrarPassword(){
        var cambio = document.getElementById("password");
        if(cambio.type == "password"){
          cambio.type = "text";
          $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
          cambio.type = "password";
          $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
      } 
      $(document).ready(function () {
      $('#ShowPassword').click(function () {
        $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
      });
    });
  </script>
 <script>function validar(){
  var url = "http://apilayer.net/api/check?access_key=7b5fa3d815e2bf9c458dfa744298a253&email=" + document.getElementById("email").value + "&smtp=1&format=1";
  const api = new XMLHttpRequest();
  var resp = false;
  api.open('GET',url,true);
  api.send();
  var resultado = document.querySelector('#resultado');
  api.onreadystatechange = function valid(){
    if(this.status == 200 && this.readyState == 4)
    {
      let datos = JSON.parse(this.responseText);
      console.log(datos.smtp_check);
      
      resultado.innerHTML = '';
      if(datos.smtp_check)
      {
        console.log('ok');
           document.fregistro.submit();
        resp = true;
      }
      else
      {
        document.fregistro.submit();
         document.fregistro.email.focus();
        resultado.innerHTML += 'Ingrese un correo válido!';
        alert('Dirección de correo inválida!');
      }
    }	
  }
  resultado.innerHTML += 'Ingrese un correo válido!';
  return resp;
}
</script>