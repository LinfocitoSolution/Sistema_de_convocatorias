<style>
footer {
<<<<<<< HEAD
	background-color:#1A1A1A;
	
  height: 50%;
=======
	background-color:#0052cc;
	height: 40%;
>>>>>>> master
  color: white;
  padding: 15px;
  
}

.main1 { 
  display:flex;
  margin:0 auto;
}

a img:hover {
    color: lightblue;
}
.row{
    margin-top:8px;
}
</style>


<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<footer>
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 text-left">
            <h4 class="text-warning">CONTACTO:</h4>
            <h6 class="text-white">
            Avenida 6 de agosto. Esquina moxos numero 542<br>
            cochabamba.<br>
            Teléfono: 4795260.<br>
            Celular: 75978930.<br>
            Correo: linfositossolution@gmail.com.<br>
            </h6>
        </div>

        <div class="col-xs-12 col-md-6 text-right">
            <h4 class="text-warning">PAGINAS DE INTERES</h4>
            <div class="redes-footer"> 
              <a href="http://websis.umss.edu.bo/"><img src="{{ asset('imagenes/websis.JPG') }}" width="40" height="40"></a>
              <a href="http://www.cs.umss.edu.bo/"><img src="{{ asset('imagenes/cs.JPG') }}" width="40" height="40"></a>
              <a href="http://www.umss.edu.bo/"><img src="{{ asset('imagenes/umss.PNG') }}" width="40" height="40"></a>
            </div>
            <div class="row"> 
               <div class="col-md-12 text-right">
                 <p class="text-white small">Empresa LINFOCITOSOLUTION.<br> 
                  Todos los derechos reservados.</p>
              </div>
            </div>

        </div>
     </div>
      
   </div>
  </div>  
</div>
</footer>