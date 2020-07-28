@extends("admin.layouts.plantilladmin")
@section('title')
    Descripción
@endsection

@section("content")
 <!-- Content Wrapper. Contains contiene paginas -->
<div class="content-wrapper">
    <div class="container"> 
        <div class="card mt-2">
            <div class="card-header">
                <h1>Descripción</h1>
                <a class="btn btn-dark px2" data-toggle="tooltip" data-trigger="hover" title="" href="{{route('crearDescrip.createdescrip')}}">
                    Nueva Descripción
                    <i class="fa fa-table"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        
                        <th>Descripción</th>
                        <th>Puntaje</th>
                        
                     </tr>
                    </thead>
                <tbody>
                    <td>Descripción</td>
                        <td>Puntaje</td>
                    
                     </tr>
                
                    </tbody>
                </table>
            
                
                
                
                
            </div>
            
                            
        </div>
    </div>  
</div>
@endsection