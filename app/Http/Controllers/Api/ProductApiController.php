<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return response()->json([
            'status' => true,
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::with('category')->find($id);

        if (!$product) {
            return response()->json([
                'status' => false,
                'message' => 'Product not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $product = Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Product Created Successfully',
            'product' => $product
        ], 201);
    }
}