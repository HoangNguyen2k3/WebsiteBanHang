<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PurchaseProductController;

Route::get('/', 'App\Http\Controllers\AdminController@loginAdmin')->name('login');
Route::post('/', 'App\Http\Controllers\AdminController@postloginAdmin')->name('postloginAdmin');
Route::post('/ckeditor/upload', [HomeController::class, 'upload'])->name('ckeditor.upload');
// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });


Route::prefix('admin')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'App\Http\Controllers\CategoryController@create'
        ]);
        Route::get('/index', [
            'as' => 'categories.index',
            'uses' => 'App\Http\Controllers\CategoryController@index'
        ]);
        Route::get('/purchase', [
            'as' => 'purchase.index',
            'uses' => 'App\Http\Controllers\PurchaseProductController@index'
        ]);
        Route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'App\Http\Controllers\CategoryController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'App\Http\Controllers\CategoryController@edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'App\Http\Controllers\CategoryController@delete'
        ]);
        Route::post('/update/{id}', [
            'as' => 'categories.update',
            'uses' => 'App\Http\Controllers\CategoryController@update'
        ]);
    });


    // Route::get('/create', [
    //     'as' => 'menus.create',
    //     'uses' => 'App\Http\Controllers\MenuController@create'
    // ]);
    // Route::post('/store', [
    //     'as' => 'menus.store',
    //     'uses' => 'App\Http\Controllers\MenuController@store'
    // ]);

    Route::prefix('product')->group(function () {
        Route::get('/index', [
            'as' => 'product.index',
            'uses' => 'App\Http\Controllers\AdminProductController@index'
        ]);
        Route::get('/create', [
            'as' => 'product.create',
            'uses' => 'App\Http\Controllers\AdminProductController@create'
        ]);
        Route::post('/store', [
            'as' => 'product.store',
            'uses' => 'App\Http\Controllers\AdminProductController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'product.edit',
            'uses' => 'App\Http\Controllers\AdminProductController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'product.update',
            'uses' => 'App\Http\Controllers\AdminProductController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'product.delete',
            'uses' => 'App\Http\Controllers\AdminProductController@delete'
        ]);
    });

    Route::prefix('slider')->group(function () {
        Route::get('/', [
            'as' => 'slider.index',
            'uses' => 'App\Http\Controllers\SliderAdminController@index'
        ]);
        Route::get('/create', [
            'as' => 'slider.create',
            'uses' => 'App\Http\Controllers\SliderAdminController@create'
        ]);
        Route::post('/store', [
            'as' => 'slider.store',
            'uses' => 'App\Http\Controllers\SliderAdminController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'slider.edit',
            'uses' => 'App\Http\Controllers\SliderAdminController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'slider.update',
            'uses' => 'App\Http\Controllers\SliderAdminController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'slider.delete',
            'uses' => 'App\Http\Controllers\SliderAdminController@delete'
        ]);
    });
    Route::prefix('productlist')->group(function () {
        Route::get('/accept/{id}', [
            'as' => 'productlist.accept',
            'uses' => 'App\Http\Controllers\PurchaseProductController@accept'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'productlist.delete',
            'uses' => 'App\Http\Controllers\PurchaseProductController@delete'
        ]);
    });
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/thongke', [PurchaseProductController::class, 'totalSuccessful'])->name('doanhthu');
