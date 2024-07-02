<?php

use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\users\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\users\HomeUserController;
use App\Http\Controllers\users\ProductUserController;
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

// frontend-----
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/home',[HomeUserController::class,'index' ]);
Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/product-details/{id}', [ProductUserController::class,'showProductDetails' ]);
Route::get('/sidebar-right', function () {
    return view('frontend.sidebar-right');
});
Route::get('/single', function () {
    return view('frontend.single');
});
// thanksroot
Route::get('/thanks', function () {
    return view('frontend.thanks');
});

Route::get('/showproduct/{category_id}', [ProductUserController::class,'showProduct' ]);
// formproduct
Route::get('/formproduct/{product_id}', [ProductUserController::class,'formproduct' ]);


// -----------

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
Route::post('/order/create', [OrderController::class,'create'])->name('.create');


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
