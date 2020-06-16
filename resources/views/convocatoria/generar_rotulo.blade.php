
@extends("auth.plantillaLogForm")
@section("infoGeneral")
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

    
        
        
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <div class="card mt-5"> 
            <div class="card-header">
              <h2>Verifique sus datos:</h2>
            </div>
            <div class="card-body">
            <form class="form-group" method="get" action={{url("/rotulo")}} >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">Nombre:</label>
                    {{-- <input type="text" class="text" id="name" placeholder="Ingrese su nombre"> --}}
                    <input type="text" class="text" id="name" value="{{ ucfirst(Auth::user()->name)}}">
                </div>
            </div>
                
            <div class="form-group row">
               <div class="col-md-3">
                    <label for="inputPassword4">Apellido:</label>
                    {{-- <input type="text" class="text" id="lastname" placeholder="Ingrese su apellido"> --}}
                    <input type="text" class="text" id="lastname" value="{{ ucfirst(Auth::user()->lastname)}}">
                </div>
            </div>
            <div class="form-group row"> 
                <div class="col-md-3">
                    <label for="inputAddress">Carrera:</label>
                  {{--<div class="input-group-prepend"> --}}                   
                    {{-- <input type="text" class="text" id="career" placeholder="Ingrese su carrera"> --}}
                     <input type="text" class="text" id="career" value="{{ ucfirst(Auth::user()->career)}}">
                   {{--</div>--}}
                </div>
            </div>
                <div class="input-group row">
                    <div class="input-group-prepend">
                        <div class="col-mb-5 mb-5">
                      <label class="input-group-text" for="">Convocatoria a postular:</label>
                    </div>
                      <select class="custom-select" id="toApply" required>
                        <option selected>Seleecione...</option>   
                        <option value="1">Laboratorio de cómputo</option>
                        <option value="2">Auxiliatura</option>
                        <option value="3">Laboratorio de redes</option>
                      </select>
                    </div>
                 </div>
                 <tr>
                  <div class="form-actions text-center">
                       <button class="btn btn-outline-dark" onclick="save();">Generar rótulo</button>
                  </div>
                      </tr>
                      
                </form>
              </div>
          </div>
      
          </div>
        </div>
      </div>
    </div>
</div>
 
 </body>
 @endsection
</html>