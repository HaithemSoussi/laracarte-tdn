<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ set_active_route('home') }}">
                    <a class="nav-link {{ set_textdark_route('home') }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{ set_active_route('about') }}">
                    <a class="nav-link {{ set_textdark_route('about') }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Artisans</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Planet
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark" href="https://laravel.com">Laravel.com</a></li>
                        <li><a class="dropdown-item text-dark" href="https://laravel.io">Laravel.io</a></li>
                        <li><a class="dropdown-item text-dark" href="https://laracasts.com">Laracasts</a></li>
                        <li><a class="dropdown-item text-dark" href="https://Larajobs.com">Larajobs</a></li>
                        <li><a class="dropdown-item text-dark" href="https://Laravel-news.com">Laravel News</a></li>
                        <li><a class="dropdown-item text-dark" href="https://Larachat.com">Larachat</a></li>
                    </ul>
                </li>
                <li class="nav-item {{ set_active_route('contact.create') }}">
                    <a class="nav-link {{ set_textdark_route('contact.create') }}"
                        href="{{ route('contact.create') }}">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-md-0 float-right">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
