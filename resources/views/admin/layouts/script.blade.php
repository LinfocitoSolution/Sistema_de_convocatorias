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
        placement:"right",
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
</script>
  

