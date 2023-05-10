<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Catagory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        $catagories = Catagory::all();
        return view('product.index', compact('products', 'catagories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catagories = Catagory::all();
        return view('product.create', compact('catagories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'catagory_id' => 'required'
        ]);

        product::create($request->post());

        return redirect()->route('product.index')->with('success', 'Product has been created successfully.');
    }

    /**
     * Display the specified resource.
     */

    public function show(product $product, Catagory $catagory)
    {
        return view('product.show', compact('product', 'catagory'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(product $product)
    {
        $catagories = Catagory::all();
        return view('product.edit', compact('product', 'catagories'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, product $product)

    {
        $request->validate([
            'product_name' => 'required',
            'catagory_id' => 'required'
        ]);

        $product->fill($request->post())->save();

        return redirect()->route('product.index')->with('success', 'Product Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product has been deleted successfully.');
    }
}
