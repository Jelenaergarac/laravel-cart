@extends('layouts.app')

@section('content')
<div class="product-container">
    <div class="product-img">
        <img src="{{ asset($product->image_path) }}" alt="{{ $product->image_name }}">
    </div>
    <div>
        <h2>{{ $product->name }}</h2>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <p><strong>Shipping Cost:</strong> ${{ $product->shipping_cost }}</p>
        <p><strong>Details: </strong> {{ $product->details }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <a href="{{ route('add.to.cart', $product->id) }}"
            role="button"
            aria-pressed="true"
            >Add To Cart</a>
    </div>
</div>

@endsection