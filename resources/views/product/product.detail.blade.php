@extends('layouts.app')

@section('content')
<main class="main">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="product-details">
          <h1>{{ $product->title }}</h1>
          <p>{{ $product->description }}</p>
          <p>Price: ${{ number_format($product->price, 2) }}</p>
          <!-- Add more details here as needed -->
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
