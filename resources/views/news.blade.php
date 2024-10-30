@extends('layout.main')

@section('content')
    <!-- Product Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h3 class="d-inline-block text-kitaanter text-uppercase border-bottom border-5">Information & News</h3>
            </div>
            @foreach ($news as $data)
                <div class="row gx-5 mb-3" data-aos="fade-left">
                    @if ($data->banner)
                        <div class="col-lg-5 mb-5 mb-lg-0" style="height: 300px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded"
                                    src="{{ asset('assets/img/' . $data->banner) }}" style="object-fit: contain;">
                            </div>
                        </div>
                    @endif
                    <div class="@if ($data->banner) col-lg-7 @else col-lg-12 @endif">
                        <div class="mb-4">
                            <h1 class="text-kitaanter">{{ $data->title }}</h1>
                        </div>
                        <p>{!! Str::limit($data->description, 200) !!}</p>
                        <div class="row g-3 pt-3">
                            <div class="col-lg-3">
                                <a href="{{ route('news.detail', Crypt::encrypt($data->id)) }}"
                                    class="btn btn-success rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Product End -->
@endsection
