<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container"> <!-- Logo -->
        <a class="navbar-brand" href="{{route('users.index')}}">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="Laravel Lab" style="height: 30px; width: auto;">
            Laravel Lab
        </a>
        <!-- Add User Button -->
        <a href="{{route('users.ajouter')}}" class="btn btn-danger">Add User</a>
    </div>
</nav>

<!-- content goes here -->

@yield('content')