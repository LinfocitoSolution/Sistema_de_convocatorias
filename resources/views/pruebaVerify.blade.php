<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba verify</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
    <script>function validar(){
        var url = "http://apilayer.net/api/check?access_key=7b5fa3d815e2bf9c458dfa744298a253&email=" + document.getElementById("email").value + "&smtp=1&format=1";
        const api = new XMLHttpRequest();
        api.open('GET',url,true);
        api.send();
        api.onreadystatechange = function(){
            if(this.status == 200 && this.readyState == 4)
            {
                let datos = JSON.parse(this.responseText);
                console.log(datos.smtp_check);
                let resultado = document.querySelector('#resultado');
                resultado.innerHTML = '';
                if(!datos.smtp_check)
                {
                    resultado.innerHTML += 'Su correo no es válido!!!';
                }
            }
        }
        // window.open(url,"_self")
    }
    </script>
    <script> function verificar(){
        var access_key = '7b5fa3d815e2bf9c458dfa744298a253';
        var email_address = document.getElementById("email").value;
        $.get({
            url: 'http://apilayer.net/api/check?access_key=' + access_key + '&email=' + email_address,   
            dataType: 'jsonp',
            success: function(json) {
            console.log(json.smtp_check);       
            if(!json.smtp_check){
                alert('Email inválido');
            }
            else
            {
                alert('Email válido');
            }
            }
        });
    }
    </script>
            <input class="form-control }" name="login" id="email" placeholder="Email" type="text"> 
            <br>
            <small class="form-text text-muted" id="resultado">
                <li></li>
            </small>
            <br>
             <button class="btn-blue" id="validar" onclick="validar()" >Verificar</button>

        <script> src = "/public/js/validarEmail.js"</script>
</body>
</html>



