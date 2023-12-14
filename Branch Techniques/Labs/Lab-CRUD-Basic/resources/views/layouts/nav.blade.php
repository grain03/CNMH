<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="https://solicode.co/images/logo/logo-solicode.svg" alt="" height="50" class="d-inline-block align-text-top">
            </a>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('projects.index')}}">Les Projet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('tasks.index')}}">Les Tâches</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
