<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('imagenes/linfocito.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Administrador</span>
    </a>

    <!-- Sidebar -->
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
          <!--fin de acceso-->
          <!--convocatorias-->
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
                  <p>NuevaConvocatoria</p>
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
          <!--fin convocatorias-->
          <!--areas-->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active bg-dark">
              <i class="nav-icon fa fa-th-large"></i>
              <p>
                Areas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a href="{{route('areas.create')}}" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Nueva</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('areas.index')}}" class="nav-link">
                  <i class="fas fa-th-list nav-icon"></i>
                  <p>Lista</p>
                </a>
              </li>
            </ul>
          </li>
          <!--fin de areas-->
          <!--unidades-->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active bg-dark">
              <i class="nav-icon fa fa-th-large"></i>
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
          <!---fin de unidades-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
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