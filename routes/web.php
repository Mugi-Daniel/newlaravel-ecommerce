<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//about
Route::get('/about', function(){
    return view('about');
});
//contact
Route::get('/contact', function(){
    return view('contact');
});

//products
Route::get('/products', [ProductsController::class, 'index']);

//single product
Route::get('/product/{id}', [ProductsController::class, 'show']);

//cart
Route::get('/cart', function(){
    return view('shop.cart');
});
//checkout
Route::get('/checkout', function(){
    return view('shop.checkout');
});

//admin data
Route::prefix('berur')->group(function(){
    Route::get('/', [DashboardController::class,'home'])->name('home');
    Route::get('/orders', [DashboardController::class,'orders']);
    Route::get('/products', [DashboardController::class,'products']);
    Route::get('/add-product', [DashboardController::class,'addproduct']);
    Route::get('/settings', [DashboardController::class,'settings']);
});