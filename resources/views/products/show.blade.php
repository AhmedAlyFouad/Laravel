@extends('layouts.app')

@section('content')
<div class="product-detail">
    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
    <h1>{{ $product->name }}</h1>
    <p>${{ $product->price }}</p>
    <p>{{ $product->description }}</p>
    <a href="{{ route('products.index') }}">Back to Products</a>
</div>
@endsection
