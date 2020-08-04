@extends("admin.layouts.plantilladmin")
@section('title')
    Tabla de Reultados de resultados finales
@endsection

@section("content")

 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h1>Lista de  Notas Finales</h1>
            </div>

            <div class="dropdown" ><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Carreras</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  @foreach($carreras as $ca)
                    <a class="dropdown-item" href="{{route('lista.postulantes',['carrera'=>$ca->id])}}">{{$ca->name}}</a><br>
                  @endforeach
                </div>
              </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-sm" id="tabla-notas">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</>
                        <th>Nota final de Mérito</th>
                        <th>Nota Final de Conocimiento</th>
                        <th>Total</th>
                     </tr>
                    </thead>
                    <tbody>
                        @foreach ($postulantes as $user)
                            @foreach ($notasMerito as $notaM)
                                @foreach ($notasConocimiento as $notaC)
                                    @if ($notaM->user_id == $user->id && $notaC->user_id == $user->id)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->lastname}}</td>
                                        <td>{{$notaM->score}}</td>    
                                        <td>{{$notaC->score}}</td>
                                        <td>{{$notaM->score + $notaC->score}}</td>
                                    </tr>  
                                    @endif
                                @endforeach        
                            @endforeach    
                        @endforeach
                    </tbody>
                </table>
                <div class="form-actions text-center mt-5">
                    <button type="submit" onclick="notasPDF()" class="btn btn-outline-dark ">DESCARGAR TABLA DE NOTAS FINALES</button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

                    
                    
                       