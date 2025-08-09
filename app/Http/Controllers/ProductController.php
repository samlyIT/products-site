<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

         public function store(Request $request) {
         $request->validate([
             'title' => 'required|string|max:255',
             'price' => 'required|numeric',
             'qty' => 'required|integer',
         ]);

         Product::create($request->all());
         
         return redirect()->route('products.index')->with('success', 'Product added successfully.');
     }
     

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
//     public function edit($id)
// {
//     $product = Product::findOrFail($id);
//     return view('products.edit', compact('product'));
// }

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'price' => 'required|numeric',
        'qty' => 'required|integer',
    ]);

    $product = Product::findOrFail($id);
    $product->update($request->only(['title', 'price', 'qty']));

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}


    // public function update(Request $request, Product $product)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'price' => 'required|numeric',
    //         'qty' => 'required|integer',
    //     ]);

    //     $product->update($request->all());
    //     return redirect()->route('products.index');
    // }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}