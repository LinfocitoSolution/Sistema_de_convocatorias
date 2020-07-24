<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('imagenes/linfocito.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
        @if(Auth::user()->roles->first()->name=='Administrador')     
         <span class="brand-text font-weight-light">Administrador</span>
               @else
              @if(Auth::user()->roles->first()->name=='Validador')
                 <span class="brand-text font-weight-light">Validador</span>
                 @else
                 @if(Auth::user()->roles->first()->name=='Secretaria') 
                    <span class="brand-text font-weight-light">Secretaria</span>
                    @else
                     <span class="brand-text font-weight-light">Jefe Departamento</span> 
                 @endif  
              @endif   
          @endif 
             
    </a>

    <!-- Sidebar -->
    @if(Auth::check())
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            @if(Auth::user()->hasPermission('list users') || Auth::user()->hasPermission('list roles') )
              <li class="nav-item has-treeview menu-close"> 

                <a href="#" class="nav-link active bg-dark">                                
                  <i class="nav-icon fas fa-asterisk"></i>
                  <p>
                    Acceso
                    <i class="right fas fa-angle-left"></i>
                  </p>                
                </a>
                
                <ul class="nav nav-treeview">
                  
                  @if(Auth::user()->hasPermission('list users'))
                    <li class="nav-item">
                      <a href="{{route('usuarios.index')}}" class="nav-link">
                        <i class="fas fa-user-circle nav-icon"></i>
                        <p>Usuarios</p>
                      </a>
                    </li>
                  @endif

                  @if(Auth::user()->hasPermission('list roles'))
                    <li class="nav-item">
                      <a href="{{ route('roles.index')}}" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Roles</p>
                      </a>
                    </li>
                  @endif

                </ul>
              </li>
            @endif
          <!--fin de acceso-->
          <!--convocatorias-->        
            @if(Auth::user()->hasPermission('list announcements') || Auth::user()->hasPermission('create announcements') )  
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Convocatorias
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(Auth::user()->hasPermission('create announcements'))
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
                  @endif
                  @if(Auth::user()->hasPermission('list announcements'))
                    <li class="nav-item">
                      <a href="{{ route('call.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Lista</p>
                      </a>
                    </li>
                  @endif
                </ul>
              </li>
            @endif          
          <!--fin convocatorias-->
          <!--areas-->
            @if(Auth::user()->hasPermission('list areas') || Auth::user()->hasPermission('create areas'))            
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fa fa-th-large"></i>
                  <p>
                    Areas
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>              
                <ul class="nav nav-treeview">
                  @if(Auth::user()->hasPermission('create areas'))
                    <li class="nav-item">
                      <a href="{{route('area.create')}}" class="nav-link">
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>Nueva</p>
                      </a>
                    </li>
                  @endif
                  @if(Auth::user()->hasPermission('list areas'))
                    <li class="nav-item">
                      <a href="{{ route('area.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Lista</p>
                      </a>
                    </li>
                  @endif
                </ul>              
              </li>
            @endif
          <!--fin de areas-->
          <!--unidades-->
            @if(Auth::user()->hasPermission('list units') || Auth::user()->hasPermission('create units'))
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fa fa-folder"></i>
                  <p>
                    Unidades
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(Auth::user()->hasPermission('create units'))
                    <li class="nav-item">
                      <a href="{{route('unidades.create')}}" class="nav-link">
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>Nueva Unidad</p>
                      </a>
                    </li>
                  @endif

                  @if(Auth::user()->hasPermission('list units'))
                    <li class="nav-item">
                      <a href="{{route('unidades.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Lista </p>
                      </a>
                    </li>
                  @endif
                </ul>
              </li>
            @endif
           <!---fin de unidades-->
          <!--Requerimientos-->
            @if(Auth::user()->hasPermission('list requirements') || Auth::user()->hasPermission('create requirements'))
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fa fa-file-alt"></i>
                  <p>
                    Requerimientos
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(Auth::user()->hasPermission('create requirements'))
                    <li class="nav-item">
                      <a href="{{route('requerimientos.create')}}" class="nav-link">
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>Nuevo Requerimiento</p>
                      </a>
                    </li>
                  @endif
                  @if(Auth::user()->hasPermission('list requirements'))
                    <li class="nav-item">
                      <a href="{{route('requerimientos.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Lista </p>
                      </a>
                    </li>
                  @endif
                </ul>
              </li>
            @endif
          <!--Fin de Requerimientos-->
          <!--Fechas-->
            @if(Auth::user()->hasPermission('list fechas') || Auth::user()->hasPermission('create fechas'))
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fa fa-calendar"></i>
                  <p>
                    Fechas
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(Auth::user()->hasPermission('create fechas'))
                    <li class="nav-item">
                      <a href="{{route('fechas.create')}}" class="nav-link">
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>Nueva Fecha</p>
                      </a>
                    </li>
                  @endif
                  @if(Auth::user()->hasPermission('list fechas'))
                    <li class="nav-item">
                      <a href="{{route('fechas.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Lista </p>
                      </a>
                    </li>
                  @endif
                </ul>
              </li>
            @endif
          <!--Fin Fechas-->
          <!--Inicio de tabla de conocimiento-->
            @if(Auth::user()->hasPermission('list tablaConocimientos') || Auth::user()->hasPermission('create tablaConocimientos'))
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active bg-dark">
                  <i class="nav-icon fa fa-table"></i>
                  <p>
                    Tabla de conocimiento
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(Auth::user()->hasPermission('create tablaConocimientos'))
                    <li class="nav-item">
                      <a href="{{route('calif.primero')}}" class="nav-link">
                        <i class="fas fa-plus-square nav-icon"></i>
                        <p>Nueva Tabla</p>
                      </a>
                    </li>
                  @endif

                  @if(Auth::user()->hasPermission('list tablaConocimientos'))
                    <li class="nav-item">
                      <a href="{{route('conocimientoCalif.index')}}" class="nav-link">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Tabla actual </p>
                      </a>
                    </li>
                  @endif

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
            
             <li class="nav-item has-treeview menu-close">
               <a href="#" class="nav-link active bg-dark">
                 <i class="nav-icon fa fa-user-graduate"></i>
                 <p>
                   Entrega documentos
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
          
         <!--Fin Postulantes-->
         <!--inicio de tabla de merito-->
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
               <a href="{{route('merito.create')}}" class="nav-link">
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
         <!--fin de tabla de merito-->
           <!--Recepcion de documentos-->
           
           <li class="nav-item has-treeview menu-close">
             <a href="#" class="nav-link active bg-dark">
               <i class="nav-icon fa fa-table"></i>
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
         
       <!--Fin libro recepcion-->

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


