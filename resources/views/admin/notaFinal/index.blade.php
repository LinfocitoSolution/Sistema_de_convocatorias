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
                <h5>{{(Auth::user()->unit_id != null) ? App\Unidad::find(Auth::user()->unit_id)->name : ''}}</h5>
               <div class="dropdown" ><button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Unidades</button>
                  <a href="{{route('nota.final')}}"> <button  class="btn btn-dark"data-toggle="tooltip" data-trigger="hover"  data-placement="right"><i class="fa fa-users mr-2"></i>Todo</button></a>
                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                       @foreach($unidades as $uni)
                          <a class="dropdown-item" tabindex="3" href="{{route('nota.final',['unidad'=>$uni->id])}}">{{$uni->name}}</a><br>
                       @endforeach
                   </div>
               </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm" id="tabla-notas">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</>
                        <th>Auxiliatura</th>
                        <th>Nota final de Mérito</th>
                        <th>Nota Final de Conocimiento</th>
                        <th>Total</th>
                     </tr>
                    </thead>
                    <tbody>
                    @if (isset($convocatorias))
                    <p id="unidad" hidden> {{$unidad->name}}</p>
                        @foreach ($convocatorias as $item)
                            @foreach ($postulantes as $user)
                            @if (Auth::user()->unit_id == $user->requerimientos->first()->convocatorias->first()->unit_id || Auth::user()->roles->first()->name == 'Admin')
                                @foreach ($notasMerito as $notaM)
                                    @foreach ($notasConocimiento as $notaC)
                                        @if ($notaM->user_id == $user->id && $notaC->user_id == $user->id)    
                                            @if ($item->requerimientos->first()->id == $user->requerimientos->first()->id)
                                                <tr>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->lastname}}</td>
                                                    <td>{{$item->requerimientos->first()->nombre_auxiliatura}}</td>
                                                    <td>{{$notaM->score}}</td>    
                                                    <td>{{$notaC->score}}</td>
                                                    <td>{{$notaM->score + $notaC->score}}</td>
                                                </tr>  
                                            @endif
                                        @endif
                                    @endforeach        
                                @endforeach    
                                @endif
                            @endforeach
                        @endforeach
                    @else
                        @foreach ($postulantes as $user)
                        @if (Auth::user()->unit_id == $user->requerimientos->first()->convocatorias->first()->unit_id || Auth::user()->roles->first()->name == 'Admin')
                            @foreach ($notasMerito as $notaM)
                                @foreach ($notasConocimiento as $notaC)
                                        @if ($notaM->user_id == $user->id && $notaC->user_id == $user->id)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->lastname}}</td>
                                                <td>{{$user->requerimientos->first()->nombre_auxiliatura}}</td>
                                                <td>{{$notaM->score}}</td>    
                                                <td>{{$notaC->score}}</td>
                                                <td>{{$notaM->score + $notaC->score}}</td>
                                            </tr>  
                                        @endif                                    
                                @endforeach        
                            @endforeach    
                        @endif
                        @endforeach
                    @endif
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

                    
                    
                       