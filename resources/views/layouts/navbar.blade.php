<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand  text-white" href="{{url('noregister')}}" tabindex="-1" >Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#" tabindex="-2" >Usuarios<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{url('login')}}" tabindex="-2" >Postulantes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#" tabindex="-2">Secretaria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#" tabindex="-2" aria-disabled="true">Jefe Departamento</a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#"  id="nabarDropdown"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Comisiones
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">Meritos</a>
          <a class="dropdown-item" href="#">Conocimiento</a>
        </div>  
      </li>
    </ul>
  <form class="form-inline">
    
    <button class="btn btn-outline-success  text-white my-2 my-sm-0" type="submit">Iniciar Sesion</button>
  </form>
  </div>
</nav>