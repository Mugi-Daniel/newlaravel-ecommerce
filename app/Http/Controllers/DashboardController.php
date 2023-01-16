<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        return view('admin.home');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function products(){
        return view('admin.products');
    }

    public function addproduct(){
        return view('admin.add-products');
    }

    public function orders(){
        return view('admin.orders');
    }
}
