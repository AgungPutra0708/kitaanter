@extends('layout.main')

@section('content')
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
@endsection
