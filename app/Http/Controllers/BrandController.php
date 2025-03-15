<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::with('products')->get();
        return view('brands.index', compact('brands')); // Load Blade view
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands,name'
        ]);

        $brand = Brand::create($request->all());

        return response()->json($brand, 201);
    }

    public function show(Brand $brand)
    {
        return response()->json($brand->load('products'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required|unique:brands,name,' . $brand->id
        ]);

        $brand->update($request->all());

        return response()->json($brand);
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return response()->json(['message' => 'Brand deleted successfully']);
    }
}
