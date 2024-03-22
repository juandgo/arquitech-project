<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/{slug}',[ShopController::class,'productDetails'])->name('shop.product.details');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.index');
// Route::get('/products', ProductController::class);
Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::get('/products/{product}',[ProductController::class,'show'])->name('products.show');
Route::delete('/products/{product}',[ProductController::class,'destroy'])->name('products.destroy');
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::patch('/products/{product}',[ProductController::class,'update'])->name('products.update');
Route::post('/products',[ProductController::class,'store'])->name('products.store');

Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::get('/categories/{categorie}',[CategoryController::class,'show'])->name('categories.show');
Route::get('/categories/{categorie}/edit',[CategoryController::class,'edit'])->name('categories.edit');
Route::patch('/categories/{categorie}',[CategoryController::class,'update'])->name('categories.update');
Route::delete('/categories/{categorie}',[CategoryController::class,'destroy'])->name('categories.destroy');
Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');


Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
});

Route::middleware(['auth','auth.admin'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});
