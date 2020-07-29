@if ($requerimientosLab->count() == 0)
        <div class="alert alert-danger mb-0">
            {{ 'No cuenta con requerimientos para laboratorio' }}
        </div>
@endif
<h6 class="text-center"><b>Código de auxiliatura</b></h6>
<div class="form-horizontal">
   <div class="table-responsive">
       <table class="table table-bordered table-striped table-sm">
           <thead>
             <tr>
                <th>#</th>
                <th>Temática</th>
                @foreach ($requerimientosLab as $req)
                    <th>{{$req->codigo_auxiliatura}}</th>
                @endforeach                  
              </tr>
          </thead>
          <tbody>
            @foreach ($tematicas as $item){{-- FALTA SERPARAR LOS ITEMS POR REQUERIMIENTOS --}}
                <tr>
                    <td>{{$item->id}}</td>        
                        <td>{{$item ->name}}</td>    
                    @foreach ($requerimientosLab as $req)
                        <td> 
                            <div style="width:5em">
                                <input class="form-control" type="number" id="nota" name="nota[]" value="0" min="0" max="100">
                            </div>
                        </td>
                    @endforeach        
                </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>        