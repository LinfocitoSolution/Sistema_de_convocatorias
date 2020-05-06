<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Crear rotulo</title>
</head>
<body>
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

    <form class="form-group" method="get" action={{url("/rotulo")}} >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <h1>Verifique sus datos:</h1>
        <div class="form-row">
        <div class="form-group col-md-3">
            <label for="">Nombre:</label>
            {{-- <input type="text" class="text" id="name" placeholder="Ingrese su nombre"> --}}
             <input type="text" class="text" id="name" value="{{ $user->name }}">
        </div>
        <div class="form-group col-md-3">
            <label for="inputPassword4">Apellido:</label>
            {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
            <input type="text" class="text" id="lastname" value="{{ $user->lastname }}">
        </div>
        <div class="form-group col-md-2">
            <label for="inputAddress">Carrera:</label>
            {{-- <input type="text" class="text" id="career" placeholder="Ingrese su carrera"> --}}
            <input type="text" class="text" id="career" value="{{ $user->career }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="">Convocatoria a postular:</label>
            </div>
            <select class="custom-select" id="toApply">
              <option selected>Seleecione...</option>   
              <option value="1">Laboratorio de cómputo</option>
              <option value="2">Auxiliatura</option>
              <option value="3">Laboratorio de redes</option>
            </select>
          </div>

        <button class="button" onclick="save();">Generar rótulo</button>
        </div>
    </form>
</body>
</html>