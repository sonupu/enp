<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProdcutController extends Controller
{
    // 1️⃣ List products
    public function index()
    {
        $products = Product::latest()->get();
        return view('Products.index', compact('products'));
    }

    // 2️⃣ Show create form
    public function create()
    {
        return view('Products.create');
    }

    // 3️⃣ Store product
    public function store(ProductRequest $request)
    {
        Product::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('product.index')
            ->with('success', 'Product created successfully.');
    }

    // 4️⃣ Show edit form
    public function edit(Product $product)
    {
        return view('Products.edit', compact('product'));
    }

    // 5️⃣ Update product
    public function update(ProductRequest $request, Product $product)
    {
        $product->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('product.index')
            ->with('success', 'Product updated successfully.');
    }
    public function destroy(Product $product)
{
    $product->delete();

    return redirect()
        ->route('product.index')
        ->with('success', 'Product deleted successfully.');
}

}
