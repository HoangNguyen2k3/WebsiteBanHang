<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Register_Controller;

//home
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home.index');
});
Route::get('/carousel1', function () {
    return view('home.carousel1');
});

Route::get('/carousel2', function () {
    return view('home.carousel2');
});

Route::get('/carousel-left', function () {
    return view('home.carousel-left');
});

Route::get('/carousel-products', function () {
    return view('home.carousel-products');
});

Route::get('/', [HomeController::class, 'index'])->name('comehome');


Route::get('/products/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');
//Show-cart
Route::get('/products/show-cart', [ProductController::class, 'showCart'])->name('showCart');
//Update-cart
Route::get('/products/update-cart', [ProductController::class, 'updateCart'])->name('updateCart');
//Delete-cart
Route::get('/products/delete-cart', [ProductController::class, 'deleteCart'])->name('deleteCart');


//login
Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('/register',  [Register_Controller::class, 'postRegister']);
Route::get('/login', [
    'as' => 'loginat',
    'uses' => 'App\Http\Controllers\LoginController@login'
]);
Route::post('/', [LoginController::class, 'logout'])->name('logout');

Route::get('/details_product', function () {
    return view('details_product.index');
});
Route::get('/details_products/{id}', [ProductController::class, 'detail'])->name('details_products');
Route::get('/category/{slug}/{id}', [
    'as' => 'category.product',
    'uses' => 'App\Http\Controllers\CategoryController@index1'
]);
Route::get('/search/{name}', [
    'as' => 'category.search1',
    'uses' => 'App\Http\Controllers\CategoryController@index1'
]);

Route::post('/update-account', [HomeController::class, 'update_account'])->name('updateAccount');
Route::get('/details_account', [HomeController::class, 'details_account'])->name('details_account');

Route::post('/purchase', [ProductController::class, 'purchase'])->name('purchase');
Route::get('/checkout', function () {
    return view('cart\checkout');
})->name('checkOut');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders_accpet/{id}', [OrderController::class, 'accept'])->name('orders.accept');
Route::post('/products/{id}/like', [ProductController::class, 'likeProduct'])->name('likeProduct');
Route::post('/products/{id}/comment', [ProductController::class, 'commentProduct'])->name('commentProduct');
