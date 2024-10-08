@extends('layout.main')
@section('content')
    <!-- Contact Start -->
    <div class="container-fluid pt-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px">
                <h3 class="d-inline-block text-kitaanter text-uppercase border-bottom border-5">
                    Please Feel Free To Contact Us
                </h3>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="height: 200px">
                        <div class="d-flex align-items-center justify-content-center rounded-circle mb-4"
                            style="width: 100px; height: 70px; background-color: #319532">
                            <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                        </div>
                        <h6 class="mb-0">Indonesia</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="height: 200px">
                        <div class="d-flex align-items-center justify-content-center rounded-circle mb-4"
                            style="width: 100px; height: 70px; background-color: #319532">
                            <i class="fa fa-2x fa-phone text-white"></i>
                        </div>
                        <h6 class="mb-0">+012 345 6789</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="height: 200px">
                        <div class="d-flex align-items-center justify-content-center rounded-circle mb-4"
                            style="width: 100px; height: 70px; background-color: #319532">
                            <i class="fa fa-2x fa-envelope-open text-white"></i>
                        </div>
                        <h6 class="mb-0">info@example.com</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="height: 500px">
                    <div class="position-relative h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://maps.google.com/maps?q=jakarta&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                            frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
