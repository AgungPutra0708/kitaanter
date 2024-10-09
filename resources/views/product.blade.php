@extends('layout.main')

@section('content')
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
@endsection
