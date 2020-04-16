@extends('layouts.callForm')

@section('title','Registro')

@section('content')
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script> 
        <script> function saveToPDF(){
             var doc = new jsPDF();
             doc.text(20,20, description.value.replace(/\n/g, "\r\n"));
             doc.text(requirements.value.replace(/\n/g, "\r\n"),20,30,0);//h,v,espacio
             doc.text(docs.value.replace(/\n/g, "\r\n"),20,40,0);
             doc.text(format.value.replace(/\n/g, "\r\n"),20,50,0);
             doc.save('document.pdf');
            }
        </script>
        <script> function getHTML(){

                var doc = new jsPDF();
                doc.html(document.body);
                doc.save('html.pdf');
            }
        </script>

                <div class="container">
                    <div class="form-group">
                            <label for="descriptionFormTextarea">Descripción</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                            <label for="requirementsFormTextarea">Requisitos</label>
                            <textarea class="form-control" id="requirements" rows="3"></textarea>
                            <label for="docsFormTextarea">Documentos a presentar</label>
                            <textarea class="form-control" id="docs" rows="3"></textarea>
                            <label for="formatFormTextarea">Formato de entrega</label>
                            <textarea class="form-control" id="format" rows="3"></textarea>
                    </div>
                </div>
                    
                <button onclick="saveToPDF();">DscargarPDF</button>
                <button onclick="getHTML();">DscargarHTML</button>  
        
@endsection
