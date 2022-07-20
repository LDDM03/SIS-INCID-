<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: 15px">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu | </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
      @if (auth()->check())
        <li class="nav-item" @if (request()->is('home'))@endif>
          <a class="nav-link active" href="/home">Dashboard</a>
        </li>

        @if (! auth()->user()->is_client)

        <li class="nav-item" @if (request()->is('ver'))@endif>
          <a class="nav-link" href="/ver">Ver incidencias</a>
        </li>

        @endif

        <li class="nav-item" @if (request()->is('reportar'))@endif>
          <a class="nav-link" href="/reportar">Reportar incidencias</a>
        </li>
        @if (auth()->user()->is_admin)
            
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administración</a>
            <div class="dropdown-menu" style="">
              <a class="dropdown-item" href="/usuarios">Usuarios</a>
              <a class="dropdown-item" href="/proyectos">Proyectos</a>
              <a class="dropdown-item" href="/config">Configuración</a>
          </li>
        @endif

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


  
      