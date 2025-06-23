@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
            <img src="{{ asset('Company/assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
            <div class="container">
                <h2>Welcome</h2>
                <p>PT Pelita Fortuna merupakan perusahaan yang bergerak di bidang perdagangan dan distribusi berbagai jenis barang, mencakup kebutuhan industri hingga produk konsumsi.</p>
                <a href="{{ route('about') }}" class="btn-get-started">Read More</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('Company/assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
            <div class="container">
                <h2>Welcome</h2>
                <p>PT Pelita Fortuna merupakan perusahaan yang bergerak di bidang perdagangan dan distribusi berbagai jenis barang, mencakup kebutuhan industri hingga produk konsumsi.</p>
                <a href="{{ route('about') }}" class="btn-get-started">Read More</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('Company/assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
            <div class="container">
                <h2>Welcome</h2>
                <p>PT Pelita Fortuna merupakan perusahaan yang bergerak di bidang perdagangan dan distribusi berbagai jenis barang, mencakup kebutuhan industri hingga produk konsumsi.</p>
                <a href="{{ route('about') }}" class="btn-get-started">Read More</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>
    </div>
</section>
<!-- /Hero Section -->

<!-- Services Section -->
<section id="services" class="services section light-background">
    <div class="container">
        <div class="row gy-4">
            <!-- Service Item 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <div class="icon">
                        <img src="{{ asset('Company/assets/img/produk/cot.png') }}" alt="Icon"
                            style="width: 100px; height: 100px; border-radius: 50%;">
                    </div>
                    <a href="{{ route('pricing') }}" class="stretched-link">
                        <h3>Corrugated Tube</h3>
                    </a>
                    <p>Berbahan dasar Plastic Polypropelene (PP) yang diaplikasikan untuk melindungi kabel kelistrikan kendaraan bermotor dari gesekkan dan getaran serta suhu exterior yang lebih ekstrim.</p>
                </div>
            </div>

            <!-- Service Item 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <div class="icon">
                        <img src="{{ asset('Company/assets/img/produk/cover.png') }}" alt="Icon"
                            style="width: 100px; height: 100px; border-radius: 50%;">
                    </div>
                    <a href="{{ route('pricing') }}" class="stretched-link">
                        <h3>PVC Cover Connector</h3>
                    </a>
                    <p>Terbuat dari bahan PVC Compound yang diaplikasikan untuk melindungi part Terminal, sambungan Soket, Fuse / Skring pada kendaraan bermotor.</p>
                </div>
            </div>

            <!-- Service Item 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <div class="icon">
                        <img src="{{ asset('Company/assets/img/produk/vinyltube.png') }}" alt="Icon"
                            style="width: 100px; height: 100px; border-radius: 50%;">
                    </div>
                    <a href="{{ route('pricing') }}" class="stretched-link">
                        <h3>Vinnyl Tube</h3>
                    </a>
                    <p>Berbahan PVC Compound yang diaplikasikan untuk melindungi kabel kelistrikan dari gesekan dan getaran saat kendaraan beroperasi.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Services Section -->

<!-- Clients Section -->
<section id="clients" class="clients section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0 clients-wrap">
            <div class="col-xl-3 col-md-4 client-logo">
                <img src="{{ asset('Company/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-xl-3 col-md-4 client-logo">
                <img src="{{ asset('Company/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-xl-3 col-md-4 client-logo">
                <img src="{{ asset('Company/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-xl-3 col-md-4 client-logo">
                <img src="{{ asset('Company/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- /Clients Section -->

@endsection
