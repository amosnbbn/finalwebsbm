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
            @php
                $products = [
                    [
                        'name' => 'Corrugated Tube',
                        'image' => 'cot.png',
                        'desc' => 'Berbahan dasar Plastic Polypropelene (PP) yang diaplikasikan untuk melindungi kabel kelistrikan kendaraan bermotor dari gesekkan dan getaran serta suhu exterior yang lebih ekstrim.'
                    ],
                    [
                        'name' => 'PVC Cover Connector',
                        'image' => 'cover.png',
                        'desc' => 'Terbuat dari bahan PVC Compond yang diaplikasikan untuk melindungi part Terminal, sambungan Soket, Fuse / Skring pada kendaraan bermotor. Sangat Tahan pada suhu < 120°c.'
                    ],
                    [
                        'name' => 'Vinnyl Tube',
                        'image' => 'vinyltube.png',
                        'desc' => 'Berbahan PVC Compond yang diaplikasikan untuk melindungi kabel kelistrikan pada kendaraan dari gesekan dan getaran saat kendaraan beroperasi.'
                    ],
                    [
                        'name' => 'Skun T-08643412',
                        'image' => 'T-08643412.png',
                        'desc' => 'Terbuat dari bahan logam kuningan terbaik untuk diaplikasikan pada ujung kabel kelistrikan sebagai penghantar listrik ke terminal lain.'
                    ],
                    [
                        'name' => 'Skun T-10553712',
                        'image' => 'T-10553712.png',
                        'desc' => 'Terbuat dari bahan logam kuningan terbaik untuk diaplikasikan pada ujung kabel kelistrikan sebagai penghantar listrik ke terminal lain.'
                    ],
                    [
                        'name' => 'Skun T-10543710',
                        'image' => 'T-10543710.png',
                        'desc' => 'Terbuat dari bahan logam kuningan terbaik untuk diaplikasikan pada ujung kabel kelistrikan sebagai penghantar listrik ke terminal lain.'
                    ],
                    [
                        'name' => 'Skun T-12544515',
                        'image' => 'T-12544515.png',
                        'desc' => 'Terbuat dari bahan logam kuningan terbaik untuk diaplikasikan pada ujung kabel kelistrikan sebagai penghantar listrik ke terminal lain.'
                    ],
                    [
                        'name' => 'Skun T-12543010',
                        'image' => 'T-12543010.png',
                        'desc' => 'Terbuat dari bahan logam kuningan terbaik untuk diaplikasikan pada ujung kabel kelistrikan sebagai penghantar listrik ke terminal lain.'
                    ]
                ];
            @endphp

            @foreach($products as $product)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset('company/assets/img/produk/' . $product['image']) }}"
                             alt="{{ $product['name'] }}"
                             class="card-img-top product-img">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">{{ $product['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

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
