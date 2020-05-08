<!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-info navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/')}}" class="nav-link text-white">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white">Convocatorias</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <form class="form-inline ml-3">
        <img src="{{ asset('imagenes/documentos.png') }}" alt="perfil" class="rounded-circle" width="30" height="30">
        <div class="btn-group">
          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Administrador</button>
            <div class="dropdown-menu">
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user mr-2"></i>Perfil
                </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('logout')}}">
                  <i class="fas fa-times-circle mr-2"></i>Cerrar Sesion
                </a>
              
        </div> 
      </form>
    </ul>
  </nav>
  <!-- /.navbar -->