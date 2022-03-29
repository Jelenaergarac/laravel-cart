@extends('layouts.app')

@section('content')


<div>
    <h1 class="shop-title">Shop</h1>
    
</div>
<div class="shop-container">
    @if ($products->count())
        
    @foreach ($products as $product)
       <div class="shop-img-box">
           <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
               <h2>{{ $product->name }}</h2>
        <p>{{ $product->details }}</p>
        <p>Price: ${{ $product->price }}</p>
        <a href="/shop/{{ $product->id }}">Read More...</a>
        </div>        
    @endforeach
    @else
    <p class="no-products">There are no products yet...</p>
        @endif

</div>
@endsection