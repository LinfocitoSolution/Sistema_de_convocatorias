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
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
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
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->lastname}}</td>
                                        <td>{{$notaM->score}}</td>    
                                        <td>{{$notaC->score}}</td>
                                        <td>{{$notaM->score + $notaC->score}}</td>
                                    @endif
                                @endforeach        
                            @endforeach    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

                    
                    
                       