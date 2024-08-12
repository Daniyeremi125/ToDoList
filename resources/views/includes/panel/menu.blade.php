 <!-- Navigation -->
 <h6 class="navbar-heading tex -muted"> PENDIENTES </h6>
 
 <ul class="navbar-nav">
    <li class="nav-item  active ">
      <a class="nav-link  active " href="./index.html">
        <i class="ni ni-tv-2 text-info"></i> Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{('/tareas')}}">
        <i class="ni ni-book-bookmark text-blue"></i> Mis Tareas
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="ni ni-single-02 text-orange"></i> Usuarios
      </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
        >
          <i class="fas fa-sign-in-alt text-danger"></i> cerrar sesion 
        </a>
        <form action="{{ route('logout') }}" method="POST"  style="display: none;" id="formLogout">
            @csrf
        </form>
      </li>
    </ul>
