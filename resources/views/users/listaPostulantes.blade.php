<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de postulantes</title>
</head>
<body>
    <h1>Postulantes registrados</h1>
    @foreach ($postulantes as $postulante)
        <p>{{'Nombre: '.$postulante->nombre}}{{' Carrera: '.$postulante->carrera}}{{' Email: '.$postulante->email}}<br></p>
    @endforeach
    
</body>
</html>