<nav class="navbar navbar-expand-md navbar-white bg-white static-top border-bottom shadow-sm">
    <div class="container">
        <a class="navbar-brand text-dark" href="{{ route('root_path') }}">Laracarte</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item {{ set_active_route('root_path') }}">
                    <a class="nav-link text-dark" href="{{ route('root_path') }}">Home</a>
                </li>
                <li class="nav-item {{ set_active_route('about_path') }}">
                    <a class="nav-link text-dark" href="{{ route('about_path') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Artisans</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdown01" data-bs-toggle="dropdown"
                        aria-expanded="false">Planet</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item text-dark" href="https://laravel.com">Laravel.com</a></li>
                        <li><a class="dropdown-item text-dark" href="https://laravel.io">Laravel.io</a></li>
                        <li><a class="dropdown-item text-dark" href="https://laracasts.com">Laracasts</a></li>
                        <li><a class="dropdown-item text-dark" href="https://Larajobs.com">Larajobs</a></li>
                        <li><a class="dropdown-item text-dark" href="https://Laravel-news.com">Laravel News</a></li>
                        <li><a class="dropdown-item text-dark" href="https://Larachat.com">Larachat</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-md-0 float-right">
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
