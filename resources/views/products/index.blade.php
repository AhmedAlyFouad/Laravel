<x-layout title="products">
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Products</h2>
            <a href="{{ route('products.create') }}" class="btn btn-success">Add New Product</a>
        </div>

        <div class="row">
            @if ($products->count() > 0)
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow">
                            <img src="{{ asset('storage/' . $product->image_path) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">Brand: {{ optional($product->brand)->name ?? 'No Brand' }}</p>
                                <p class="card-text">Price: ${{ $product->price }}</p>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">No products available. <a href="{{ route('products.create') }}">Add one?</a></p>
            @endif
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $products->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
@endsection
</x-layout>