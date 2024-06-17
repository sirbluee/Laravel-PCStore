@extends('layouts.app')
@section('content')

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="product-gallery">
                    @if(!empty($productImages) && $productImages->count())
                        @foreach($productImages as $image)
                            <img src="{{ $image->image_path }}" alt="{{ $product->title }}" style="width: 100%; height: auto;">
                        @endforeach
                    @else
                        <p>No images available for this product.</p>
                    @endif
                </div>
            </div><!-- End .col-lg-5 -->

            <div class="col-lg-7">
                <div class="product-details">
                    <h1 class="product-title">{{ $product->title }}</h1>
                    <div class="product-price">
                        ${{ number_format($product->price, 2) }}
                    </div><!-- End .product-price -->

                    <div class="product-colors">
                        <h4>Available Colors:</h4>
                        @if(!empty($productColors) && $productColors->count())
                            <ul>
                                @foreach($productColors as $color)
                                    <li>{{ $color->color_name }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No colors available for this product.</p>
                        @endif
                    </div><!-- End .product-colors -->

                    <div class="product-description">
                        <p>{{ $product->description }}</p>
                    </div><!-- End .product-description -->

                    <form action="{{ route('paypal') }}" method="post">
                        @csrf
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="product_name" value="{{ $product->title }}">
                        <button type="submit" class="btn btn-primary">Buy Now</button>
                    </form>
                </div><!-- End .product-details -->
            </div><!-- End .col-lg-7 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</main><!-- End .main -->

@endsection
