<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    @if(Auth::check())
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/iconohom.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ ucfirst(Auth::user()->name) }} {{ ucfirst(Auth()->user()->lastname)  }}</a>
          <a href="#" class="d-block">{{ ucfirst(Auth::user()->roles->first()->name)  }}</a>
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Añadir icons a los links usando la class .nav-icon 
               con font-awesome o culaquier otro icon font library -->
          <!--Acceso-->
            
            @if(Auth::user()->hasPermission('responsable de convocarorias'))
              <li class="nav-item has-treeview menu-close"> 

                <a href="#" class="nav-link active bg-dark">                                
                  <i class="nav-icon fas fa-asterisk"></i>
                  <p>
                    Acceso
                    <i class="right fas fa-angle-left"></i>
                  </p>                
                </a>
                
                <ul class="nav nav-treeview">
                  
                  
                    <li class="nav-item">
                      <a href="{{route('usuarios.index')}}" class="nav-link">
                        <i class="fas fa-user-circle nav-icon"></i>
                        <p>Usuarios</p>
                      </a>
                    </li>
                    
                    <li class="nav-item">
                      <a href="{{ route('roles.index')}}" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Roles</p>
                      </a>
                    </li>
                  

                </ul>
              </li>
            @endif
          <!--fin de acceso-->
          <!--convocatorias-->        

          @if(Auth::user()->hasPermission('responsable de convocarorias'))  
        
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Convocatorias
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                    <li class="nav-item">
                      <a href="{{ route('call.create')}}" class="nav-link">                
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>NuevaConvocatoriaLabos</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{route('call.createdoc')}}" class="nav-link">                
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>NuevaConvocatoriaDoc</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ route('call.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Lista</p>
                      </a>
                    </li>
                  
                </ul>
              </li>
            @endif          
          <!--fin convocatorias-->
          
          <!--unidades-->
            
            @if(Auth::user()->hasPermission('responsable de convocarorias'))            
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fa fa-folder"></i>
                  <p>
                    Unidades
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                    <li class="nav-item">
                      <a href="{{route('unidades.create')}}" class="nav-link">
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>Nueva Unidad</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{route('unidades.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Lista </p>
                      </a>
                    </li>
                  
                </ul>
              </li>
            @endif
           <!---fin de unidades-->
          <!--Requerimientos-->
          
            
            @if(Auth::user()->hasPermission('responsable de convocarorias'))
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fa fa-file-alt"></i>
                  <p>
                    Requerimientos
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                    <li class="nav-item">
                      <a href="{{route('requerimientos.create')}}" class="nav-link">
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>Nuevo Requerimiento</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{route('requerimientos.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Lista </p>
                      </a>
                    </li>
                  
                </ul>
              </li>
            @endif
          <!--Fin de Requerimientos-->
          <!--Fechas-->
         
            
            @if(Auth::user()->hasPermission('responsable de convocarorias'))
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fa fa-calendar"></i>
                  <p>
                    Fechas-Eventos
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                    <li class="nav-item">
                      <a href="{{route('fechas.create')}}" class="nav-link">
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>Nueva Fecha</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{route('fechas.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Lista </p>
                      </a>
                    </li>
                  
                </ul>
              </li>
            @endif
          <!--Fin Fechas-->
          <!---Tematica--->          
          
          @if(Auth::user()->hasPermission('responsable de convocarorias'))
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active bg-dark">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Tematicas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
                <li class="nav-item">
                  <a href="{{route('tematica.unidad')}}" class="nav-link">
                    <i class="fas fa-plus-square nav-icon"></i>
                    <p>Nueva Tematica</p>
                  </a>
                </li>
              
              
                <li class="nav-item">
                  <a href="{{route('tematica.index')}}" class="nav-link">
                    <i class="fas fa-th-list nav-icon"></i>
                    <p>Lista </p>
                  </a>
                </li>
              
            </ul>
          </li>
          @endif
          <!---Fin tematica--->
          <!--Inicio de tabla de conocimiento-->
          
            @if(Auth::user()->hasPermission('comision conocimientos'))            
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fa fa-table"></i>
                  <p>
                    Tabla de conocimiento
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                    <li class="nav-item">
                      <a href="{{route('calif.primero')}}" class="nav-link">
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>Nueva Tabla</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{route('conocimientoCalif.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Tablas creadas </p>
                      </a>
                    </li>

                  <li class="nav-item">
                    <a href="{{route('lista.postulantes')}}" class="nav-link">
                      <i class="fas fa-th-list nav-icon"></i>
                      <p>Calificar Postulantes </p>
                    </a>
                  </li>
                  
                </ul>
              </li>
            @endif
          <!--Fin tabla de conocimiento-->

             <!--Postulante-->             
             
             @if(Auth::user()->hasPermission('habilitado_inhabilitado'))
             <li class="nav-item has-treeview menu-close">
               <a href="#" class="nav-link active bg-dark">
                 <i class="nav-icon fa fa-user-graduate"></i>
                 <p>
                   Habilitados/Inhabilitados
                   <i class="right fas fa-angle-left"></i>
                 </p>
               </a>

                      
                     
     
               <ul class="nav nav-treeview">
                
                 <li class="nav-item">
                    <a href="{{route('habilitado_inhabilitado.index')}}" class="nav-link">
                       <i class="fas fa-th-list nav-icon"></i>
                       
                       <p>Lista Postulantes</p>
                    </a>
                  </li>
                
               </ul>
            </li>
          @endif
         <!--Fin Postulantes-->
         <!--inicio de tabla de merito-->
         
         @if(Auth::user()->hasPermission('comision meritos') || Auth::user()->hasPermission('responsable de convocatorias') )
         
         <li class="nav-item has-treeview menu-close">
          <a href="#" class="nav-link active bg-dark">
            <i class="nav-icon fa fa-table"></i>
            <p>
              Tabla de méritos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            
            <li class="nav-item">
               <a href="{{route('merito.primero')}}" class="nav-link">
                  <i class="fas fa-th-list nav-icon"></i>
                  Nueva Tabla Méritos
                  <p></p>
               </a>
             </li>
             
          </ul>   
                

          <ul class="nav nav-treeview">
            
            <li class="nav-item">
               <a href="{{route('merito.index')}}" class="nav-link">
                  <i class="fas fa-th-list nav-icon"></i>
                  Lista de méritos
                  <p></p>
               </a>
             </li>
             
          </ul>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
               <a href="{{route('calif.index')}}" class="nav-link">
                  <i class="fas fa-check-square nav-icon"></i>
                  Calificación de Méritos
                  <p></p>
               </a>
             </li>
             
          </ul>
        </li>
        @endif
         <!--fin de tabla de merito-->
           <!--Recepcion de documentos-->           
           @if(Auth::user()->hasPermission('libro_recepcion'))           
           <li class="nav-item has-treeview menu-close">
             <a href="#" class="nav-link active bg-dark">
               <i class="nav-icon fa fa-book-open"></i>
               <p>
                 Libro de recepcion
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
                
                 <li class="nav-item">
                   <a href="{{route('libro.create')}}" class="nav-link">
                     <i class="fas fa-plus-square nav-icon"></i>
                     <p>Nuevo </p>
                   </a>
                 </li>

                 <li class="nav-item">
                   <a href="{{route('libro.index')}}" class="nav-link">
                     <i class="fas fa-th-list nav-icon"></i>
                     <p>Lista del libro</p>
                   </a>
                 </li>
                 
             </ul>
           </li>
           @endif
       <!--Fin libro recepcion-->
       <!-- inicio nota final-->             
       @if(Auth::user()->hasPermission('responsable de convocarorias'))
       <li class="nav-item has-treeview menu-close">
        <a href="#" class="nav-link active bg-dark">
          <i class="nav-icon fa fa-table"></i>
          <p>
            Notas Finales
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          
            <li class="nav-item">
              <a href="{{route('nota.final')}}" class="nav-link">
                <i class="fas fa-plus-square nav-icon"></i>
                <p>Lista de Notas Finales</p>
              </a>
            </li>
            
          </ul>
        </li>
        @endif
       <!--fin de nota final-->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    @endif
    <!-- /.sidebar -->
  </aside>

 <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->


