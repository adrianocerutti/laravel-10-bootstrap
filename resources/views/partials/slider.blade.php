<div id="carouselMain" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/slider-1.jpg') }}" class="d-block w-100" alt="[image]">
            <div class="carousel-caption d-md-block">
                <h5 class="text-light flow-text">Lorem ipsum dolor sit amet.</h5>
                <a href="#leadModal" class="btn btn-primary flow-text" data-bs-toggle="modal"
                    data-bs-target="#leadModal">Quero me
                    cadastrar</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slider-2.jpg') }}" class="d-block w-100" alt="[image]">
            <div class="carousel-caption d-md-block">
                <h5 class="text-light flow-text">Lorem ipsum dolor sit amet.</h5>
                <a href="#leadModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#leadModal">Quero me
                    cadastrar</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- Modal --}}
<div class="modal fade" id="leadModal" tabindex="-1" aria-labelledby="leadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form action="" method="post">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="leadModalLabel">Preencha todos os campos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">
                                    <i class="fa-solid fa-user" style="color: #1f3051;"></i> Nome
                                </label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" required
                                    placeholder="Digite seu nome">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">
                                    <i class="fa-solid fa-mobile" style="color: #1f3051;"></i> Telefone
                                </label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1" required
                                    placeholder="Digite seu telefone">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">
                                    <i class="fa-solid fa-envelope" style="color: #1f3051;"></i> E-mail
                                </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" required
                                    placeholder="Digite seu e-mail">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">
                        <i class="fa-solid fa-eraser"></i> Limpar
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-regular fa-paper-plane"></i> Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
