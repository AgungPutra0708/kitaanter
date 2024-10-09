@extends('layout.main')

@section('content')
    <!-- Hero Start -->
    @foreach ($dataHome as $data)
        @if ($data->section == 'hero')
            <div class="container-fluid bg-primary mb-5 hero-header">
                <div class="col-lg-8 text-center text-lg-start">
                    <img src="{{ asset('assets/img/' . $data->banner) }}" alt="" class="hero-image">
                </div>
            </div>
        @endif
    @endforeach
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    @foreach ($dataHome as $data)
                        @if ($data->section == 'about')
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded"
                                    src="{{ asset('assets/img/' . $data->banner) }}" style="object-fit: cover;">
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-7">
                    <h5 class="d-inline-block text-kitaanter text-uppercase border-bottom border-5">About Us</h5>
                    @foreach ($dataAbout as $data)
                        @if ($data->home == 'true')
                            <div class="mb-4">
                                <h1 class="display-4 text-kitaanter">{{ $data->title }}</h1>
                            </div>
                            <p>{!! $data->description !!}</p>
                        @endif
                    @endforeach
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
            @foreach ($dataProducts as $data)
                <div class="row gx-5 mb-3">
                    @if ($loop->iteration % 2 == 0)
                        <!-- Jika genap, gambar di kanan -->
                        <div class="col-lg-7" data-aos="fade-left">
                            <div class="mb-4">
                                <h1 class="display-4 text-kitaanter">{{ $data->title }}</h1>
                            </div>
                            <p>{!! $data->description !!}</p>
                        </div>
                        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                            <div class="position-relative h-100" data-aos="fade-left">
                                <img class="position-absolute w-100 h-100 rounded"
                                    src="{{ asset('assets/img/' . $data->banner) }}" style="object-fit: contain;">
                            </div>
                        </div>
                    @else
                        <!-- Jika ganjil, gambar di kiri -->
                        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                            <div class="position-relative h-100" data-aos="fade-right">
                                <img class="position-absolute w-100 h-100 rounded"
                                    src="{{ asset('assets/img/' . $data->banner) }}" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="col-lg-7" data-aos="fade-right">
                            <div class="mb-4">
                                <h1 class="display-4 text-kitaanter">{{ $data->title }}</h1>
                            </div>
                            <p>{!! $data->description !!}</p>
                        </div>
                    @endif
                </div>
            @endforeach
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
                @foreach ($dataTeams as $data)
                    <div class="team-item">
                        <div class="row g-0 bg-light rounded overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="{{ asset('assets/img/' . $data->photo) }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                <div class="mt-auto p-4">
                                    <h3>{{ $data->title }}</h3>
                                    <h6 class="fw-normal fst-italic text-primary mb-4">{{ $data->desc_title }}</h6>
                                    <p class="m-0">{!! $data->description !!}</p>
                                </div>
                                <div class="d-flex mt-auto border-top p-4">
                                    <a class="btn btn-lg btn-success btn-lg-square rounded-circle me-3"
                                        href="{{ $data->twitter }}"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-success btn-lg-square rounded-circle me-3"
                                        href="{{ $data->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-lg btn-success btn-lg-square rounded-circle"
                                        href="{{ $data->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
