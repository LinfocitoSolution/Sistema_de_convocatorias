  <!-- jQuery -->
<script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
<!---<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
<!---popper-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!---<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>---->
<!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">---->
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
      document.getElementById("hab").value="habilitado";
      }else{
      document.getElementById("ventana").style.backgroundColor='#dc3545';
      document.getElementById("hab").value="deshabilitado";
      }
      //document.getElementById("descripcion").value="Su calificacion es :"+calificacion;
      
       $('#exampleModalLong').modal('show');
       calificacion=0;
  }
  //fin del script de documentos a presentar//

  //scrpt 2 para documentos presentar docencia//
  var calificacion=0;
  function hola2(){
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
      document.getElementById("hab").value="habilitado";
      }else{
      document.getElementById("ventana").style.backgroundColor='#dc3545';
      document.getElementById("hab").value="deshabilitado";
      }
      //document.getElementById("descripcion").value="Su calificacion es :"+calificacion;
      
       $('#exampleModalLong').modal('show');
       calificacion=0;
  }
</script>

 
