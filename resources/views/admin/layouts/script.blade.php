  <!-- jQuery -->
<script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.min.js')}}"></script>
<!-- Select2 -->
<link href="{{URL::asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />
<script src="{{URL::asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script>
  <script>
    $(function () {
     $('[data-toggle="popover"]').popover({
        trigger:"hover"
     })
    })
  </script>
  <script>
    $('.js-example-basic-multiple').select2({
        placeholder: "Seleccione un valor",
        allowClear: true
    });
</script>
<script>
  $(document).ready(function(){
      $('.js-example-basic-multiple').select2({
          placeholder: "Seleccione un valor",
          theme: "classic",
          allowClear: true
      });
  });
</script>
<script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
   })
</script> 

<script>
  function mostrarPassword(){
      var cambio = document.getElementById("password");
      var cambio2 = document.getElementById("confirm_password");
      if(cambio.type == "password" || cambio2.type == "password" ){
        cambio.type = "text";
        cambio2.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
      }else{
        cambio.type = "password";
        cambio2.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
      }
    } 
    $(document).ready(function () {
    $('#ShowPassword').click(function () {
      $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
    });
  });
  //##################################################/
  //Script de documentos a presentar asignandole valores//
  
  var calificacion=0;
  function hola(){
      if(document.getElementById("switch1").checked==true){
          document.getElementById("switch1").value=10;
          calificacion=calificacion+10;
          
      }else{
          document.getElementById("switch1").value=0;
      }
      if(document.getElementById("switch2").checked==true){
          document.getElementById("switch2").value=10;
          calificacion=calificacion+10;
          
      }else{
          document.getElementById("switch2").value=0;
      }
      if(document.getElementById("switch3").checked==true){
          document.getElementById("switch3").value=10;
          calificacion=calificacion+10;
          
      }else{
          document.getElementById("switch3").value=0;
      }
      if(document.getElementById("switch4").checked==true){
          document.getElementById("switch4").value=10;
          calificacion=calificacion+10;
          
      }else{
          document.getElementById("switch4").value=0;
      }
      if(document.getElementById("switch5").checked==true){
          document.getElementById("switch5").value=10;
          calificacion=calificacion+10;
          
      }else{
          document.getElementById("switch5").value=0;
      }
      if(document.getElementById("switch6").checked==true){
          document.getElementById("switch6").value=10;
          calificacion=calificacion+10;
          
      }else{
          document.getElementById("switch6").value=0;
      }
      if(document.getElementById("switch7").checked==true){
          document.getElementById("switch7").value=10;
          calificacion=calificacion+10;
          
      }else{
          document.getElementById("switch7").value=0;
      }
      if(calificacion==70){
      document.getElementById("ventana").style.backgroundColor='#28a745';
      document.getElementById("habilitado").value="habilitado";
      }else{
      document.getElementById("ventana").style.backgroundColor='#dc3545';
      document.getElementById("habilitado").value="desabilitado";
      }
     /* document.getElementById("descripcion").value="Su calificacion es :"+calificacion;*/
      
       $('#exampleModalLong').modal('show');
       calificacion=0;
  }
  //fin del script de documentos a presentar//
</script>

 
