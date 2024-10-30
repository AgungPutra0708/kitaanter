@extends('layout.main')

@section('content')
    <!-- Product Start -->
    <div class="container-fluid py-3">
        <div class="container">
            @if ($news->banner)
                <div class="text-center align-content-center">
                    <img src="{{ asset('assets/img/' . $news->banner) }}" alt="" style="max-width: 600px; width: 100%">
                </div>
            @endif
            <div class="row gx-5 mb-3" data-aos="fade-left">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <h1 class="display-4 text-kitaanter text-center">{{ $news->title }}</h1>
                    </div>
                    {!! $news->description !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->
@endsection
