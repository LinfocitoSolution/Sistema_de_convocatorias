
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="{{asset('jquery/jquery-3.4.1.slim.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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