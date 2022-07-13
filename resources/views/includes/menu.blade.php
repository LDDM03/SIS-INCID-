<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: 15px">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          @if (auth()->check())
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ver incidencias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reportar incidencias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Administración</a>
        </li>
        @else
        <a class="nav-link" href="#">Bienvenido</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Instrucciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Créditos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre Nosotros</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>




