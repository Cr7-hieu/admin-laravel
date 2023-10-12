<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::prefix('admin')->group(function(){
    Route::get('home',[HomeController::class,'layout']);
    
    
});
Route::prefix('admin/user')->group(function(){
    Route::get('login',[UserController::class,'login'])->name('user_login');
    Route::post('login',[UserController::class,'setLogin'])->name('user_set_login');
    Route::get('register',[UserController::class,'register'])->name('user_register');
    Route::post('register',[UserController::class,'setRegister'])->name('user_set_register');
});

// Route::prefix('admin/product')->group(function(){
//     Route::get('index',[ProductController::class,'index'])->name('product_index');
//     Route::get('create',[ProductController::class,'create'])->name('product_create');
//     Route::post('create',[ProductController::class,'setCreate'])->name('product_set_create');
//     Route::get('update{id}',[ProductController::class,'update'])->name('product_update');
//     Route::put('update/{id}',[ProductController::class,'setUpdate'])->name('product_set_update');
// });