<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(){
        //$products = Products::all();
        //$products = Products::where('name','Bio Whole Milk - 2L')->get();
        //$products = Products::where('name','like','%Brookside%')->get();
        $products = Products::latest()->get();
        //$products = Products::orderBy('name','asc')->get();
        return view('shop.products',['products'=>$products]);
    }

    public function show($id){
        $product = [
            'id' => $id,
            'name' => '2 Litres',
            'price' => 1200
        ];
        return view('shop.product',$product);
    }
}
