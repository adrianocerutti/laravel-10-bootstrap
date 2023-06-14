<div class="bg-primary">
    <div class="container text-light">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">© {{ date('Y') }}</p>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="{{ route('home') }}"
                        class="nav-link text-light px-2 text-body-secondary">Home</a>
                </li>
                <li class="nav-item"><a href="{{ route('servicos') }}"
                        class="nav-link text-light px-2 text-body-secondary">Servicos</a>
                </li>
                <li class="nav-item"><a href="{{ route('galeria') }}"
                        class="nav-link text-light px-2 text-body-secondary">Galeria</a>
                </li>
                <li class="nav-item"><a href="{{ route('contato') }}"
                        class="nav-link text-light px-2 text-body-secondary">Contato</a>
                </li>
            </ul>
        </footer>
    </div>
</div>
