@extends('layouts.app')
@section('content')

<main class="main">
  <div class="page-header text-center">
    <div class="container">
      @if(!empty($getSubCategory))
      <h1 class="page-title">{{$getSubCategory->name}}</h1>
      @else
      <h1 class="page-title">{{$getCategory->name}}</h1>
      @endif
    </div><!-- End .container -->
  </div><!-- End .page-header -->
  <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
        @if(!empty($getSubCategory))
        <li class="breadcrumb-item" aria-current="page">
          <a href="{{url($getCategory->slug)}}">
            {{$getCategory->name}}
          </a>
        </li>
        <li class="breadcrumb-item active">{{$getSubCategory->name}}</li>
        @else
        <li class="breadcrumb-item active" aria-current="page">{{$getCategory->name}}</li>
        @endif
      </ol>
    </div><!-- End .container -->
  </nav><!-- End .breadcrumb-nav -->

  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="products mb-3">
            <div class="row justify-content-center">
              @foreach($getProduct as $value)
              @php
              $getProductImage = $value->getImageSingle($value->id);
              @endphp
              <div class="col-6 col-md-4 col-lg-4">
                <div class="product product-7 text-center">
                  <figure class="product-media">
                    <a href="{{ url(strval($value->slug)) }}" class="d-flex justify-content-center align-items-center ">
                      @if(!empty($getProductImage) && !empty($getProductImage->getLogo()))
                      <img src="{{$getProductImage->getLogo()}}" alt="{{$value->title}}" class="product-image" style="width: 200px; height:200px; object-fit:cover;">
                      @endif
                    </a>
                    <!-- <form action="{{ route('paypal') }}" method="post" style="width: 100%;">
                      <div class="product-action">
                        <div class="product-action">
                          @csrf
                          <input type="hidden" name="price" value="{{ $value->price }}">
                          <input type="hidden" name="product_name" value="{{ $value->title }}">
                        </div>
                        <button type="submit" class="btn-product btn-cart border border-0">
                          <span>Pay with Paypal</span>
                        </button>
                      </div>
                    </form> -->
                  </figure><!-- End .product-media -->
                  <div class="product-body">
                    <div class="product-cat">
                      <a href="{{url($value->category_slug . '/' . $value->sub_category_slug)}}">{{($value->sub_category_name)}}</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title">
                      <!-- <a href="{{ url(strval($value->slug)) }}">
                        {{$value->title}} 
                      </a> -->
                      <!-- <a href="{{ url('/product/' . $value->slug) }}">
                        {{ $value->title }}
                      </a>   -->
                      <a href="{{ route('admin.show', ['id' => $value->id]) }}">
                        {{ $value->title }}
                      </a>
                    </h3><!-- End .product-title -->
                    <div class="product-price">
                      ${{number_format($value->price,2)}}
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                      <div class="ratings">
                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                      </div><!-- End .ratings -->
                      <span class="ratings-text">( 2 Reviews )</span>
                    </div><!-- End .rating-container -->
                  </div><!-- End .product-body -->
                </div><!-- End .product -->
              </div><!-- End .col-sm-6 col-lg-4 -->
              @endforeach
            </div><!-- End .row -->
          </div><!-- End .products -->
          <div class="d-flex justify-content-center align-items-center">
            {!! $getProduct->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
          </div>
        </div><!-- End .col-lg-9 -->
      </div><!-- End .row -->
    </div><!-- End .container -->
  </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection