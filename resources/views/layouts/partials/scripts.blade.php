
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="{{asset('jquery/jquery-3.4.1.slim.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
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
