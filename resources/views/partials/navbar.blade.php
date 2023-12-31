<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><i class="fa-brands fa-laravel" style="color: #ffffff;"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('home') }}">
                        <i class="fa-solid fa-house" style="color: #ffffff;"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('servicos') }}">
                        <i class="fa-solid fa-briefcase" style="color: #ffffff;"></i> Serviços
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('galeria') }}">
                        <i class="fa-solid fa-camera" style="color: #ffffff;"></i> Galeria
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('contato') }}">
                        <i class="fa-solid fa-envelope" style="color: #ffffff;"></i> Contato
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
