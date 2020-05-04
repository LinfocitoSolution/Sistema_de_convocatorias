@extends('layouts.plantilla')

@section('cabecera')
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

@endsection

@section('infoGeneral')

        <script> function saveToPDF(nombre, apellido, carrera){
            
             var doc = new jsPDF();
             doc.text(20,20,nombre);
             doc.text(20,30,apellido);
             doc.text(20,40,carrera);
             doc.save('rotulo.pdf');
            }
        </script>

    <form class="form-group" method="post" action={{url("/rotulo/generar")}} enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-row">
        <div class="form-group col-md-2">
            <label for="">Nombre:</label>
           {{--             <a class="text-monospace">{{ucfirst(Auth()->user()->name)}}</a>  --}}
             <h4>{{ $user->name }}</h4>
        </div>
        <div class="form-group col-md-2">
            <label for="inputPassword4">Apellido:</label>
            {{-- <a class="text-monospace">{{ucfirst(Auth()->user()->lastname)}}</a>  --}}
            <h4>{{ $user->lastname }}</h4>
        </div>
        <div class="form-group col-md-2">
            <label for="inputAddress">Carrera:</label>
            {{--  <a class="text-monospace">{{ucfirst(Auth()->user()->career)}}</a>   --}}
            <h4>{{ $user->career }}</h4>
        </div>
        <button class="btn btn-primary" onclick="saveToPDF($user->name, $user->lastname, $user->career);">Generar rótulo</button>
        </div>
    </form>  

@endsection
@section('pie')