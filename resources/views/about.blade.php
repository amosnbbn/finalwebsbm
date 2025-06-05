@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- Page Title -->
<div class="page-title accent-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Page Title -->

<!-- About Section -->
<section id="about" class="about section">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('Company/assets/img/about.jpg') }}" alt="About Us" class="img-fluid rounded shadow">
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                <h2 class="inner-title">PT Pelita Fortuna</h2>
                <div class="our-story">
                    <h4>Est 1988</h4>
                    <h3>Our Story</h3>
                    <p>Perusahaan kami bergerak di bidang perdagangan dan distribusi komponen kelistrikan kendaraan. 
                        Produk-produk yang kami salurkan menggunakan material berkualitas tinggi seperti PVC lunak, 
                        Polypropylene, dan kuningan tembaga. Kami memastikan setiap produk yang kami distribusikan 
                        telah melalui proses kontrol kualitas yang ketat dan dibekali dengan standar inspeksi keselamatan
                         kerja sesuai dengan regulasi pemerintah.</p> 
                    <p>Sebagai mitra distribusi, kami mendukung kebutuhan 
                         berbagai perusahaan Wiring Harness lokal yang digunakan pada sepeda motor, mobil, serta 
                         diaplikasikan dalam sistem kelistrikan kendaraan seperti alarm, central lock, dan sistem kelistrikan lainnya.</p>
                    <ul>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            <strong>Fokus pada Pelanggan</strong><br>Menyediakan produk berkualitas tinggi dan memberikan layanan yang prima.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            <strong>Investasi</strong><br>Berinvestasi dalam infrastruktur, jaringan, sumber daya manusia, dan kapabilitas.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i>
                            <strong>Penciptaan Nilai</strong><br>Menciptakan nilai bagi seluruh pemangku kepentingan: pelanggan, prinsipal, staf, dan pemegang saham.
                        </li>
                    </ul>
                    <div class="watch-video d-flex align-items-center position-relative mt-3">
                        <i class="bi bi-play-circle"></i>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch Video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi Section -->
<section id="vision-mission" class="vision-mission py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-5">
            <h2>Visi & Misi</h2>
            <p>Komitmen Kami untuk Menjadi Mitra Terbaik Anda</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0 p-4 rounded bg-white">
                    <h4 class="text-primary"><i class="bi bi-eye"></i> Visi</h4>
                    <p class="mb-4">
                        Menjadi perusahaan perdagangan dan distribusi terpercaya di tingkat nasional dan internasional yang inovatif, adaptif, serta memberikan nilai tambah yang berkelanjutan bagi pelanggan dan mitra bisnis.
                    </p>
                    <h4 class="text-success"><i class="bi bi-bullseye"></i> Misi</h4>
                    <p>
                        Menyediakan produk-produk berkualitas tinggi yang sesuai dengan kebutuhan industri dan konsumen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
