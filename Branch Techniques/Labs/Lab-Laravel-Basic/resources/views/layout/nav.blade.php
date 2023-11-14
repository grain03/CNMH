<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Academy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('add.stagiaire') }}">Ajouter stagiaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('show.stagiaire') }}">Liste des stagiaires</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" id="search-form">
        <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search" name="search" id="search-input">
      </form>
    </div>
  </div>
</nav>
