<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand {{ request ()->routeIs('apodoInicio')?'text-primary': '' }}" href="{{ route('apodoInicio') }}">Luna</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request ()->routeIs('apodoRegistro')?'text-primary': '' }}" aria-current="page" href="{{ route('apodoRegistro') }}">Registro libro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>