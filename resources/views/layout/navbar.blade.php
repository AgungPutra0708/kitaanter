<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img class="img-fluid image-navbar" src="{{ asset('assets/img/kitaanterlogo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('product') }}"
                        class="nav-item nav-link {{ Route::is('product') ? 'active' : '' }}">Product</a>
                    <a href="{{ route('management') }}"
                        class="nav-item nav-link {{ Route::is('management') ? 'active' : '' }}">Management</a>
                    <a href="{{ route('news') }}"
                        class="nav-item nav-link {{ Route::is('news') || Route::is('news.detail') ? 'active' : '' }}">News</a>
                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
