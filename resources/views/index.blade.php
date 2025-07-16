@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section Custom -->
<section id="hero-custom" class="d-flex align-items-center" style="height: 100vh; background: linear-gradient(to right,rgb(73, 255, 73),rgb(25, 28, 26)); color: white; position: relative;">
  <div class="container">
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

<!-- CSS Animations -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

  .produk-item {
    opacity: 0;
    transition: opacity 1s ease-in-out, transform 0.6s ease;
    transform: scale(0.95);
  }

  .produk-item.active {
    opacity: 1;
    transform: scale(1.05);
    z-index: 2;
  }

  .produk-slider.glass-box {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
  }

  .produk-slider.glass-box:hover {
    box-shadow: 0 12px 45px rgba(0, 0, 0, 0.5);
    background: rgba(255, 255, 255, 0.08);
    transform: scale(1.01);
  }

  .clients-track {
    display: flex;
    width: max-content;
  }

  @keyframes slideLeft {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }
</style>

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

@endsection
