<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5); 
        return view('products.index',compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the input
        $request->validate([
            'item_name'=>'required',
            'category'=>'required',
            'quantity_on_hand'=>'required',
            'reorder_level'=>'required',
            'minimum_level'=>'required',
            'maximum_level'=>'required',
            'supplier_name'=>'required',
            'contact'=>'required',
            'unit_cost'=>'required',
            'total_value'=>'required',
        ]);

        // create a new product in the database
        Product::create($request->all());

        // redirect the user 
        return redirect()->route('products.index')->with('success','Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // validate the input
        $request->validate([
            'item_name'=>'required',
            'category'=>'required',
            'quantity_on_hand'=>'required',
            'reorder_level'=>'required',
            'minimum_level'=>'required',
            'maximum_level'=>'required',
            'supplier_name'=>'required',
            'contact'=>'required',
            'unit_cost'=>'required',
            'total_value'=>'required',
        ]);

        // update the product information
        $product->update($request->all());

        // redirect
        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // delete the product from database
        $product->delete();

        // redirect the user back to
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}
