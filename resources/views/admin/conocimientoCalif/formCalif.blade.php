<script type="text/javascript">
    const conv = {!! json_encode($notas) !!};
</script>
<h6 class="text-center"><b>Código de auxiliatura</b></h6>
<div class="form-horizontal">
    
   <div class="table-responsive">
       <table class="table table-bordered table-striped table-sm">
           <thead>
             <tr>
                    <th>Temática</th>
                        @foreach ($user->requerimientos as $req)
                            <th>{{$req->codigo_auxiliatura}}</th>
                        @endforeach                                     
              </tr>
          </thead>
          <tbody>
            @foreach ($tematicas as $item)
                @foreach ($notas as $nt)
                    <tr>
                            @if ($item->id == $nt->tematica_id)
                                <td>{{$item->name}}</td>    
                                <td> 
                                    <div style="width:5em">
                                    <input class="form-control" type="number" id="notas" name="notas[]" value="0" min="0" max="100">
                                    </div>
                                </td>
                            @endif                            
                    </tr>
                @endforeach   
            @endforeach
      </table>
   </div>
</div>        

<script> window.onload = function conocimientosCalif(){
    var nots = {!! json_encode($notas) !!};
    console.log(nots);
    for(var i=0;i<nots.length;i++)
    {
        var p1 = document.getElementsByName('notas[]')[i];    
        
        if(nots[i].score == 0)
        {
            p1.setAttribute("value", nots[i].score -1);
            p1.setAttribute("type", "hidden");
        }
        else
        {
            p1.setAttribute("max", nots[i].score);
        }
    }    
    console.log(p1);
}
</script>