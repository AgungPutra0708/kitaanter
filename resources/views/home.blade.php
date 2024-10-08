@extends('layout.main')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary mb-5 hero-header">
        <div class="col-lg-8 text-center text-lg-start">
            <img src="{{ asset('assets/img/hero-banner.jpg') }}" alt="" class="hero-image">
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{ asset('assets/img/about-us.jpg') }}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-kitaanter text-uppercase border-bottom border-5">About Us</h5>
                        <h1 class="display-4 text-kitaanter">Title About Us</h1>
                    </div>
                    <p class="about-desc">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum
                        et, tempor
                        voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum
                        et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur
                        takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore.
                        Amet erat amet et magna</p>
                    <div class="row g-3 pt-3">
                        <div class="col-lg-3">
                            <a href="{{ route('about') }}" class="btn btn-success rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Product Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h3 class="d-inline-block text-kitaanter text-uppercase border-bottom border-5">Product Overview</h3>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{ asset('assets/img/price-1.jpg') }}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Product 1</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class="product-content text-center py-5">
                        <p>Description 1</p>
                        <p>Description 2</p>
                        <p>Description 3</p>
                        <p>Description 4</p>
                    </div>
                    <a href="" class="btn btn-success rounded-pill py-3 px-5 my-2">Order Now</a>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{ asset('assets/img/price-2.jpg') }}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Product 2</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal"
                                    style="font-size: 22px; line-height: 45px;">$</small>99<small
                                    class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class="product-content text-center py-5">
                        <p>Description 1</p>
                        <p>Description 2</p>
                        <p>Description 3</p>
                    </div>
                    <a href="" class="btn btn-success rounded-pill py-3 px-5 my-2">Order Now</a>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{ asset('assets/img/price-3.jpg') }}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Product 3</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal"
                                    style="font-size: 22px; line-height: 45px;">$</small>149<small
                                    class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class="product-content text-center py-5">
                        <p>Description 1</p>
                        <p>Description 2</p>
                    </div>
                    <a href="" class="btn btn-success rounded-pill py-3 px-5 my-2">Order Now</a>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{ asset('assets/img/price-4.jpg') }}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Product 4</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal"
                                    style="font-size: 22px; line-height: 45px;">$</small>199<small
                                    class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/
                                    Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class="product-content text-center py-5">
                        <p>Description 1</p>
                    </div>
                    <a href="" class="btn btn-success rounded-pill py-3 px-5 my-2">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h3 class="d-inline-block text-kitaanter text-uppercase border-bottom border-5">Our Management</h3>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ asset('assets/img/ceo.jpg') }}"
                                style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>CEO Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Chief Executive Officer</h6>
                                <p class="m-0">Description CEO</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-success btn-lg-square rounded-circle me-3" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded-circle me-3" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded-circle" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ asset('assets/img/cto.jpg') }}"
                                style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>CTO Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Chief Technology Officer</h6>
                                <p class="m-0">Description CTO</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-success btn-lg-square rounded-circle me-3" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded-circle me-3" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded-circle" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
