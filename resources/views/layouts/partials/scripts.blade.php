
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="{{asset('jquery/jquery-3.4.1.slim.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
  <script src="{{asset('js/html2canvas.js')}}" type="text/javascript"></script>
  <script> function save(){
    var doc = new jsPDF();
    doc.text("Nombre: ".concat(document.getElementById("name").value) ,20,20);
    doc.text("Apellido: ".concat(document.getElementById("lastname").value) ,20,26);
    doc.text("Carrera: ".concat(document.getElementById("career").value) ,20,32);
    var list = document.getElementById("toApply");
    var selectedValue = list.options[list.selectedIndex].value;
    var selectedText = list.options[list.selectedIndex].text;
    doc.text("Aplica a: ".concat(selectedText),20,38);
    doc.save('rotulo.pdf');
   }
  </script>

  <script> async function getPdf(){
    var data = document.getElementById('datos');
    //OPCION 1 por divs
    // html2canvas(data).then(function(canvas) {
    //             var img = canvas.toDataURL('image/png');
    //             var doc = new jsPDF();
    //             doc.addImage(img, 'JPEG', 5, 10);
    //             doc.save('testA.pdf');
    //         });

    //OPCION 2 toda la pág
    // html2canvas(document.body).then(function(canvas) {
    //             var img = canvas.toDataURL('image/png');
    //             var doc = new jsPDF();
    //             doc.addImage(img, 'JPEG', 10, 10);
    //             doc.save('testB.pdf');
    //         });

    //OPCION 3
    // html2canvas(document.getElementById('datos'), { scale: 2}).then(function(canvas) {
    //         document.body.appendChild(canvas);
    //         var imgData = canvas.toDataURL('image/png');  
    //         var doc = new jsPDF('p', 'mm');
    //         doc.addImage(imgData, 'PNG', 10, 10);
    //         doc.save('testC.pdf');
    //         // $(body).append(canvas);
    // });

    //OPCION 4
        html2canvas(data).then(canvas => {
          var imgWidth = 200;
          var pageHeight = 190;
          var imgHeight = canvas.height * imgWidth / canvas.width;
          var heightLeft = imgHeight;
          const contentDataURL = canvas.toDataURL('image/png', 10)
          var options = {
          size: '70px',
          background: '#fff',
          pagesplit: true,
        };
        let pdf = new jsPDF('p', 'mm', 'letter', 1); 
        var position = 0;
        var width = pdf.internal.pageSize.width;
        var height = pdf.internal.pageSize.height;
        pdf.addImage(contentDataURL, 'PNG', 2, position, imgWidth, imgHeight, options)
        pdf.addImage(contentDataURL, 'PNG', 2, position, imgWidth, imgHeight, options);
        heightLeft -= pageHeight;
        while (heightLeft >= 0) {
          position = heightLeft - imgHeight;
          pdf.addPage();
          pdf.addImage(contentDataURL, 'PNG', 2, position, imgWidth, imgHeight, options);
          heightLeft -= pageHeight;
        }
        pdf.save('testD.pdf');
        });
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
