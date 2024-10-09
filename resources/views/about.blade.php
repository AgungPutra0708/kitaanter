@extends('layout.main')

@section('content')
    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <!-- Blog Detail Start -->
                @foreach ($dataAbout as $data)
                    <div class="mb-2">
                        <h1 class="mb-3 text-center text-kitaanter">
                            {{ $data->title }}
                        </h1>
                        <p>
                            {!! $data->description !!}
                        </p>
                        @if ($data->banner != null)
                            <div class="d-flex justify-content-center text-center">
                                <a href="{{ asset('assets/img/' . $data->banner) }}" data-fancybox="gallery"
                                    data-caption="{{ $data->title }}">
                                    <img class="img-fluid w-50 rounded" src="{{ asset('assets/img/' . $data->banner) }}"
                                        alt="" />
                                </a>
                            </div>
                        @endif
                    </div>
                @endforeach
                <!-- Blog Detail End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
