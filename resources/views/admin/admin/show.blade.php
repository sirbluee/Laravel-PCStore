@extends('layouts.app')
@section('content')
<main class="main">
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title">{{ $product->title }}</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="product-detail">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                @php
                                $getProductImage = $product->getImageSingle($product->id);
                                @endphp
                                <a href="javascript:;" class="d-flex justify-content-center align-items-center">
                                    @if(!empty($getProductImage) && !empty($getProductImage->getLogo()))
                                    <img src="{{$getProductImage->getLogo()}}" alt="{{$product->title}}" class="product-image" style="width: 300px; height:300px; object-fit:cover;">
                                    @endif
                                </a>
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="{{ url($product->category_slug . '/' . $product->sub_category_slug) }}">{{ $product->sub_category_name }}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title">{{ $product->title }}</h3><!-- End .product-title -->
                                <div class="product-price">
                                    ${{ number_format($product->price, 2) }}
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 20 Reviews )</span>
                                </div><!-- End .rating-container -->
                                <div class="product-description mt-3">
                                    <p>
                                        @if(!empty($product->description))
                                        {{ $product->description }}
                                        @else
                                        Skytech Gaming Nebula Gaming PC Desktop – Intel Core i5 13400F 2.5 GHz, NVIDIA RTX 3050, 1TB NVME SSD, 16GB DDR4 RAM 3200, 600W Gold PSU, 11AC Wi-Fi, Windows 11
                                        @endif
                                    </p>
                                </div><!-- End .product-description -->
                            </div><!-- End .product-body -->
                            <div class="product-action mt-3">
                                <a href="#" class="btn-product btn-cart"><span>Add to Cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                    </div><!-- End .product-detail -->
                </div><!-- End .col-md-8 col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection