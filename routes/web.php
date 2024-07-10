<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\PartialsController;
use App\Http\Controllers\Frontend\ShoppingCartController;


Route::controller(HomeController::class)->group(function(){
    Route::get('/',                                 'home')->name(('home'));
    Route::get('/shop',                             'shop')->name(('shop'));
    Route::get('/blogs',                            'blog')->name('blog');
    Route::get('/abouts',                           'abouts')->name('abouts');
    Route::get('/contacts',                         'contacts')->name('contacts');
    Route::get('/category/{Category:Slug}',         'category')->name('category');
    Route::get('/product-details/{Product:Slug}',   'product_details')->name('product_details');
    Route::get('/blog-details/{Blog:Slug}',         'blog_details')->name('blog_details');
});


//json data multiple dependency
Route::get('get/dist/{div_id}',[PartialsController::class, 'getDist']);
Route::get('/login',        [PartialsController::class, 'login'])->name('login');
require __DIR__.'/auth.php';
require __DIR__.'/user.php';
