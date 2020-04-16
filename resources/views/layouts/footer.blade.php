<style>
footer {
	background-color:#0052cc;
	height: 40%;
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
/*.row{
    margin-top:2px;
}*/

</style>


<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<footer>
  <div class="container">
      <div class="row">
          <div class="col-xs-12 col-md-6 text-left text-warning">
              <h4 class="text-warning">CONTACTO:</h4>
              <h6 class="text-white">
              Direccion: Avenida 6 de agosto. Esquina moxos numero 542.<br>
              Teléfono: 4795260.<br>
              Celular: 75978930.<br>
              Correo: linficitossolution@gmail.com
              </h6>
          </div>

          <div class="col-xs-12 col-md-6 text-right">
              <h5 class="text-success">ENCUENTRANOS EN LAS REDES</h5>
              <div class="redes-footer">
                <a href="http://websis.umss.edu.bo/"><img src="{{asset('imagenes/websis.JPG')}}" width="60" height="60"></a>
                <a href="http://www.cs.umss.edu.bo/"><img src="{{asset('imagenes/cs.JPG')}}" width="60" height="60"></a>
                <a href="http://www.umss.edu.bo/"><img src="{{asset('imagenes/umss.png')}}" width="60" height="60"></a>
              </div>
          </div>
       </div>
      <div class="row">
          <div class="col-md-12 text-right">
              <p class="text-white medium">LinfocitoSolution @2020.<br> Todos los derechos reservados.</p>
          </div>  
      </div>
    </div>
</footer>