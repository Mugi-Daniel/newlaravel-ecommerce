<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\OrdersController;
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

//admin login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/add-users', [LoginController::class, 'create'])->name('add-user');
Route::post('/add', [LoginController::class, 'store'])->name('store-user');

Route::get('/dashboard', function(){
    return view('admin.home');
})->name('dashboard');

//about
Route::get('/about', function(){
    return view('about');
});
//contact
Route::get('/contact', function(){
    return view('contact');
});

//products
//Route::get('/products', [ProductsController::class, 'index']);

//single product
Route::get('product', [ProductsController::class, 'index_one'])->name('our-products');
Route::get('/show/{id}', [ProductsController::class, 'single_p'])->name('single-product');

//Route::get('/prod/{id}', [ProductsController::class, 'single_p'])->name('single-product');

//cart
Route::get('/cart', function(){
    return view('shop.cart');
});
//checkout
Route::get('/checkout', function(){
    return view('shop.checkout');
});

//admin data


// adding products
Route::group(['prefix' => 'berur-p'], function () {
    Route::controller(ProductsController::class)->group(function () {
        Route::get('products', 'index')->name('products');
        Route::get('create-product', 'create')->name('add-product');
        Route::post('product-store', 'store')->name('product-store');
        Route::get('edit/{id}', 'edit')->name('edit-product');
        Route::patch('edit/{id}', 'update');
        Route::get('show/{id}', 'show')->name('show-product');
        Route::delete('delete/{id}', 'destroy')->name('delete-product');
    })->middleware('auth');
});


//Adding categories
Route::group(['prefix' => 'berur'], function () {
    Route::controller(CategoriesController::class)->group(function () {
        Route::get('data', 'index')->name('categories');
        Route::get('create-category', 'create')->name('add-category');
        Route::post('category-store', 'store')->name('cate-store');
        Route::get('edit/{id}', 'edit')->name('edit-category');
        Route::patch('edit/{id}', 'update');
        Route::get('show/{id}', 'show')->name('show-category');
        Route::delete('delete/{id}', 'destroy')->name('delete-category');
    });
});

//Routes for settings
Route::group(['prefix' => 'settings'], function () {
    Route::controller(SettingsController::class)->group(function () {
        Route::get('create-setting', 'create')->name('add-settings');
        Route::post('store', 'store')->name('store');
    });
});

//Routes for Orders
Route::group(['prefix' => 'order'], function () {
    Route::controller(OrdersController::class)->group(function () {
        Route::get('myorder', 'store')->name('post-orders');
        Route::get('data', 'index')->name('order-data');
        Route::get('show/{id}', 'show')->name('show-orders');
        Route::post('updatestat/{id}', 'updateStat')->name('update-order-status');
        Route::delete('delete/{id}', 'destroy')->name('delete-order');
    });
});

