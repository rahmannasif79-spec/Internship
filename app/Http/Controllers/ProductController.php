<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Product Added Successfully!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Product Updated Successfully!');
    }

    public function destroy(string $id)
    {
        //
    }
}