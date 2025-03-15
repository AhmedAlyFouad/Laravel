<x-layout title="Product">
@extends('layouts.app')

@section('content')
<div class="product-detail">
    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
    <h1>{{ $product->name }}</h1>
    <p>${{ $product->price }}</p>
    <p>{{ $product->description }}</p>

    {{-- Edit Button --}}
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>

    {{-- Delete Form --}}
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">
            Delete
        </button>
    </form>

    <br><br>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
</div>
@endsection
</x-layout>