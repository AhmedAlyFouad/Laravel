<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Use eager loading to prevent N+1 query issues and paginate results
        $products = Product::with('brand')->paginate(9); 
        return view('products.index', compact('products')); 
    }

    public function show($id)
    {
        $product = Product::with('brand')->findOrFail($id);
        return view('products.show', compact('product'));
    }
}
