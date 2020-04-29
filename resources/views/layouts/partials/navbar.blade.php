<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand  text-white" href="{{url('noregister')}}" tabindex="-1" >Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('convocatorias') }}">Convocatorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('calendario') }}">Calendario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#">Informacion</a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#"  id="nabarDropdown" tabindex="-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Malla Curricular
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">Sistemas</a>
          <a class="dropdown-item" href="#">Informatica</a>
          <a class="dropdown-item" href="#">Industrial</a>
        </div>  
      </li>
    </ul>
      <form class="form-inline">
         <a class="btn btn-outline-success  text-white my-2 my-sm-0" type="submit" href="{{url('login')}}">Iniciar Sesion</a>
      </form>
  </div>
</nav>