@extends('layouts.app')

@section('content')
<h1>Products</h1>
<div class="grid">
    @foreach ($products as $product)
        <div class="card">
            <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
            <h3>{{ $product->name }}</h3>
            <p>${{ $product->price }}</p>
            <a href="{{ route('products.show', $product->id) }}">See More</a>
        </div>
    @endforeach
</div>
@endsection
