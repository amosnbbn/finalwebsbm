@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section Custom -->
<section id="hero-custom" class="d-flex align-items-center position-relative" style="height: 100vh; overflow: hidden;">
  <!-- 🔹 Parallax Background -->
  <div class="parallax position-absolute top-0 start-0 w-100 h-100" style="z-index: 0; pointer-events: none;">
    <img src="{{ asset('Company/assets/img/dekorasi/hill1.png') }}" class="layer" data-speed="0.2">
    <img src="{{ asset('Company/assets/img/dekorasi/hill2.png') }}" class="layer" data-speed="0.4">
    <img src="{{ asset('Company/assets/img/dekorasi/hill3.png') }}" class="layer" data-speed="0.4">
    <img src="{{ asset('Company/assets/img/dekorasi/hill4.png') }}" class="layer" data-speed="0.4">
    <img src="{{ asset('Company/assets/img/dekorasi/hill5.png') }}" class="layer" data-speed="0.4">
    <img src="{{ asset('Company/assets/img/dekorasi/leaf.png') }}" class="layer" data-speed="0.4">
    <img src="{{ asset('Company/assets/img/dekorasi/plant.png') }}" class="layer" data-speed="0.4">
    <img src="{{ asset('Company/assets/img/dekorasi/tree.png') }}" class="layer mouse-parallax" data-speed="0.5">
  </div>

  <div class="container position-relative" style="z-index: 2;">
    <div class="row align-items-center">

      <!-- KIRI: Informasi Perusahaan -->
      <div class="col-md-6 mb-5 mb-md-0">
        <h5 style="font-size: 2.5rem;letter-spacing: 2px; text-transform: uppercase; color: #ffffff; font-weight: 800; font-family: 'Poppins', sans-serif;">
          PT. SUKSES BERSAMA MULIA
        </h5>
        <h1 class="fw-bold mb-4" style="font-size: 2.0rem; line-height: 1.4; color: #ffffff; font-family: 'Poppins', sans-serif;">
          Perusahaan manufacture<br>spesialis wiring harness
        </h1>

        <a href="{{ route('about') }}" class="btn rounded-pill px-4 py-2 mb-4" style="background-color: #00c853; color: white;">Read More</a>

        <div class="d-flex align-items-center gap-3">
          <div class="bg-white text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
            <i class="bi bi-envelope-fill"></i>
          </div>
          <div>
            <small>Email</small><br>
            <span>marketing@suksesbersamamulia.com</span>
          </div>
        </div>
      </div>

      <!-- KANAN: Gambar Produk Bergantian -->
      <div class="col-md-6 text-center position-relative">
        <div class="produk-slider glass-box rounded-4 p-3 shadow-lg position-relative" style="height: 400px;">
          <img src="{{ asset('Company/assets/img/produk/cot.png') }}" class="produk-item img-fluid position-absolute top-0 start-50 translate-middle-x active" style="max-height: 400px;" alt="Produk 1">
          <img src="{{ asset('Company/assets/img/produk/cover.png') }}" class="produk-item img-fluid position-absolute top-0 start-50 translate-middle-x" style="max-height: 400px;" alt="Produk 2">
          <img src="{{ asset('Company/assets/img/produk/vinyltube.png') }}" class="produk-item img-fluid position-absolute top-0 start-50 translate-middle-x" style="max-height: 400px;" alt="Produk 3">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Clients Section -->
<section class="clients-section section py-5 bg-light">
  <div class="container text-center mb-4">
    <h2 class="clients-title fw-bold" style="font-size: 2rem;">Clients</h2>
  </div>

  <div class="clients overflow-hidden">
    <div class="clients-track d-flex align-items-center" style="animation: slideLeft 20s linear infinite;">
      @foreach(range(1,4) as $i)
        <div class="client-logo px-5">
          <img src="{{ asset('Company/assets/img/clients/client-' . $i . '.png') }}" alt="Client {{ $i }}" style="height: 80px;">
        </div>
      @endforeach
      @foreach(range(1,4) as $i)
        <div class="client-logo px-5">
          <img src="{{ asset('Company/assets/img/clients/client-' . $i . '.png') }}" alt="Client {{ $i }}" style="height: 80px;">
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- JS for Product Fade -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.produk-item');
    let current = 0;

    setInterval(() => {
      items[current].classList.remove('active');
      current = (current + 1) % items.length;
      items[current].classList.add('active');
    }, 4000); // setiap 4 detik
  });
</script>

<!-- Parallax -->
 <script>
document.addEventListener("DOMContentLoaded", function () {
  const layers = document.querySelectorAll(".layer");

  document.addEventListener("mousemove", function (e) {
    const x = (window.innerWidth / 2 - e.pageX);
    const y = (window.innerHeight / 2 - e.pageY);

    layers.forEach(layer => {
      const speed = layer.getAttribute("data-speed");
      const moveX = (x * speed) / 100;
      const moveY = (y * speed) / 100;

      layer.style.transform = `translate(calc(-50% + ${moveX}px), calc(-50% + ${moveY}px))`;
    });
  });

  // Optional: Tambah scroll effect juga
  document.addEventListener("scroll", function () {
    const scrollTop = window.scrollY;
    layers.forEach(layer => {
      const speed = layer.getAttribute("data-speed");
      const moveY = scrollTop * speed;
      const currentTransform = layer.style.transform;

      // Ambil nilai translateX saat ini, lalu gabungkan dengan translateY scroll
      const matchX = currentTransform.match(/translate\(calc\(-50%\s*\+\s*(.*?)px\)/);
      const moveX = matchX ? matchX[1] : 0;

      layer.style.transform = `translate(calc(-50% + ${moveX}px), calc(-50% + ${moveY}px))`;
    });
  });
});
</script>


@endsection
