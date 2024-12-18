@extends('layout.main')

@section('content')
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
                                        href="{{ $data->link1 }}"><i class="fab fa-tiktok"></i></a>
                                    <a class="btn btn-lg btn-success btn-lg-square rounded-circle me-3"
                                        href="{{ $data->link2 }}"><i class="fab fa-instagram"></i></a>
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
