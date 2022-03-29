<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
Route::get('/', [TestController::class, 'index'])->name('home');
Route::get('/product', [TestController::class, 'product'])->name('product');
Route::get('/product-detail/{id}', [TestController::class, 'detail'])->name('product-detail');
Route::get('/blog', [TestController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{id}', [TestController::class, 'blogDetail'])->name('blog-detail');


