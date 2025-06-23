@extends('layouts.app')

@section('title', 'Products')

@push('styles')
<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        z-index: 2;
    }

    .product-img {
        height: 300px;
        object-fit: cover;
    }

    .btn-marketplace img {
        height: 24px;
        width: auto;
        margin-bottom: 2px;
    }
</style>
@endpush

@section('content')

<!-- Page Title -->
<div class="page-title accent-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Products</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current">Produk</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Page Title -->

<!-- Produk Section -->
<section id="produk" class="produk section">
    <div class="container">
        <div class="row gy-4">
                        @foreach($products as $product)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            class="card-img-top product-img">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description ?? 'Deskripsi belum tersedia.' }}</p>
                            @if ($product->price)
                                <p class="fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

    
        <!-- Marketplace Buttons -->
        <div class="text-center my-5">
            <h4 class="mb-4">Kunjungi Toko Kami di Marketplace:</h4>
            <div class="d-flex justify-content-center gap-4 flex-wrap">
                <a href="https://shopee.co.id/shop/329952597" target="_blank"
                   class="btn btn-lg btn-marketplace rounded-pill shadow d-flex align-items-center gap-2"
                   style="background-color: #ee4d2d; color: white;">
                    <img src="{{ asset('company/assets/img/logo/shopee.png') }}" alt="Shopee Logo">
                    Shopee
                </a>
                <a href="https://www.tokopedia.com/diveshose" target="_blank"
                   class="btn btn-lg btn-marketplace rounded-pill shadow d-flex align-items-center gap-2"
                   style="background-color: #03ac0e; color: white;">
                    <img src="{{ asset('company/assets/img/logo/tokopedia.png') }}" alt="Tokopedia Logo">
                    Tokopedia
                </a>
            </div>
        </div>
        <!-- /Marketplace Buttons -->

    </div>
</section>
<!-- /Produk Section -->

@endsection
