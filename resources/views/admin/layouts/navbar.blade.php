<!-- Navbar -->

  <nav class="main-header navbar navbar-expand">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu"data-toggle="tooltip" data-trigger="hover" title="Presiona para ocultar el men&uacute; o mostrarlo" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" data-toggle="tooltip" data-trigger="hover" title="Retorna al inicio de la pagina">
        <a href="{{url('/')}}" class="nav-link text-white">Inicio</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <form class="form-inline ml-3">
        <img src="{{ asset('imagenes/documentos.png') }}" alt="perfil" class="rounded-circle" width="30" height="30">
        <div class="btn-group" data-toggle="tooltip" data-placement="left" data-trigger="hover" title="Presiona y selecciona si deseas cerrar sesion">
          <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Administrador</button>
            <div class="dropdown-menu">
              <div class="dropdown-divider"></div>
                <a class="dropdown-item bg-dark" tabindex="0" data-toggle="tooltip" data-placement="left" data-trigger="hover" title="Este boton no esta disponible" href="{{ route('postulante.show',ucfirst(Auth::user()->id))}}">
                  <i class="fas fa-user mr-2"></i>Perfil
                </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item bg-dark" href="{{url('logout')}}">
                  <i class="fas fa-times-circle mr-2"></i>Cerrar Sesion
                </a>
             
        </div> 
      </form>
    </ul>
  </nav>
  <!-- /.navbar -->