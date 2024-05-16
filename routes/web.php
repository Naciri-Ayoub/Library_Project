<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/','/dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
});
// category



Route::get('/states', function () {
    return view('states');
});
Route::get('/products', [ProductController::class,'index']);
Route::get('/users', function () {
    return view('users.index');
});
Route::get('/orders', function () {
    return view('order.index');
});
// Route::get('/show', function () {
//     return view('order.show');
// });




Route::get('/category', [CategoryController::class,'index']);//table category
Route::get('/category/create', [CategoryController::class,'create']);//table category
Route::post('/category/store', [CategoryController::class,'store']);//stock dans database
Route::get('/category/edit/{id}', [CategoryController::class,'edit']);
Route::post('/category/update', [CategoryController::class,'update']);
Route::get('/category/destroy/{id}', [CategoryController::class,'destroy'])->name('.destroy');// delete route

Route::get('/orders', [OrderController::class,'index']);
Route::get('/order/show/{id}', [OrderController::class,'show']);
Route::post('/orders/store', [OrderController::class,'store']);
Route::get('/order/destroy/{id}', [OrderController::class,'destroy'])->name('.destroy');


Route::get('/user', [UserController::class,'index']);
Route::post('/user/store', [UserController::class,'store']);

Route::get('/product', [ProductController::class,'index']);
Route::get('/product/create', [ProductController::class,'create']);
Route::post('/product/store', [ProductController::class,'store']);
Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update', [ProductController::class,'update']);
Route::get('/product/destroy/{id}', [ProductController::class,'destroy'])->name('.destroy');

Route::get('/client', [ClientController::class,'index']);
Route::get('/client/create', [ClientController::class,'create']);//create
Route::post('/client/store', [ClientController::class,'store']);
Route::get('/client/edit/{id}', [ClientController::class,'edit']);//edit
Route::post('/client/update', [ClientController::class,'update']);//update
Route::get('/client/destroy/{id}', [ClientController::class,'destroy'])->name('.destroy');// delete route

// hhjg