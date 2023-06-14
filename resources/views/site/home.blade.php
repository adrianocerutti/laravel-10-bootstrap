@extends('site.layout')
@section('title', 'Página Inicial')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-3 text-center">
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="row">
            {{-- card 1 --}}
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <img src="{{ asset('images/cards/card-1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum dolor.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quae
                            corrupti dolorem commodi repudiandae ducimus? Nemo reiciendis hic voluptatem quia.</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
            {{-- card 2 --}}
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <img src="{{ asset('images/cards/card-2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum dolor.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quae
                            corrupti dolorem commodi repudiandae ducimus? Nemo reiciendis hic voluptatem quia.</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
            {{-- card 3 --}}
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <img src="{{ asset('images/cards/card-3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum dolor.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quae
                            corrupti dolorem commodi repudiandae ducimus? Nemo reiciendis hic voluptatem quia.</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>&nbsp;</p>
    <div class="container">
        <div class="row">
            <section class="col-sm-12">
                <h1>Lorem ipsum dolor sit.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, quam vel temporibus aliquid quasi
                    incidunt accusamus ratione ab earum similique dolorem doloremque asperiores quos fuga perspiciatis
                    voluptatem quibusdam nam saepe praesentium officia quia voluptas suscipit illo. Esse cupiditate magni ab
                    totam debitis nisi iusto, enim voluptatem illo, rem similique minus?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quos ducimus architecto laboriosam
                    quaerat in, vel eius. Dolorem voluptatum accusantium sed vel maiores. Neque est, nihil in temporibus
                    atque mollitia!</p>
                <a href="" class="btn btn-primary btn-sm">Saiba mais</a>
                <a href="" class="btn btn-secondary btn-sm">Cadastre-se</a>
            </section>
        </div>
    </div>
    <p>&nbsp;</p>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 text-center mb-3">
                <img src="{{ asset('images/team/team-1.jpg') }}" alt="[image]" class="rounded-circle">
                <p>Bia</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, voluptates!</p>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 text-center mb-3">
                <img src="{{ asset('images/team/team-2.jpg') }}" alt="[image]" class="rounded-circle">
                <p>Julia</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, voluptates!</p>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 text-center mb-3">
                <img src="{{ asset('images/team/team-3.jpg') }}" alt="[image]" class="rounded-circle">
                <p>Mary</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, voluptates!</p>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </div>
    <p>&nbsp;</p>
@endsection
