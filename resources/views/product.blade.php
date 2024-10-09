@extends('layout.main')

@section('content')
    <!-- Product Start -->
    <div class="container-fluid py-5">
        <div class="container">
            @foreach ($dataHome as $data)
                @if ($data->section == 'product')
                    <img src="{{ asset('assets/img/' . $data->banner) }}" alt=""
                        style="width: -webkit-fill-available;">
                @endif
            @endforeach
            @foreach ($dataProducts as $data)
                @if ($loop->iteration % 2 == 0)
                    <!-- Jika genap, gambar di kanan -->
                    <div class="row gx-5 mb-3" data-aos="fade-right">
                        <div class="col-lg-7">
                            <div class="mb-4">
                                <h1 class="display-4 text-kitaanter">{{ $data->title }}</h1>
                            </div>
                            <p>{!! $data->description !!}</p>
                        </div>
                        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded"
                                    src="{{ asset('assets/img/' . $data->banner) }}" style="object-fit: contain;">
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Jika ganjil, gambar di kiri -->
                    <div class="row gx-5 mb-3" data-aos="fade-left">
                        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded"
                                    src="{{ asset('assets/img/' . $data->banner) }}" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="col-lg-7 order-first order-lg-1">
                            <div class="mb-4">
                                <h1 class="display-4 text-kitaanter">{{ $data->title }}</h1>
                            </div>
                            <p>{!! $data->description !!}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <!-- Product End -->
@endsection
