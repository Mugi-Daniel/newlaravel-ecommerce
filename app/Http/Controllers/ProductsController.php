<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(12);
        
        return view('admin.product-data', [
            'products' => $products
        ]);
    }

    public function index_one()
    {
        $product = Product::paginate(12);
        
        return view('ourproducts', [
            'product' => $product
        ]);
    }

    public function single_p($id)
    {
        $product = Product::find($id);
        
        return view('shop.product', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request);
        
        $product = new Product;
        $product->Product_name= $request->input('product-name');
        $product->Category = $request->input('category');
        $product->Price = $request->input('price');

        if ($request->hasFile('image')) {
            $destination_path = "public/images/products";
            $image_name = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs($destination_path, $image_name);

            $product->Image_name = $image_name;
        }


        // $product->Image_name = $request->input('image_name');
        $product->save();

        return back()->with('success', 'Product added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.products');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
