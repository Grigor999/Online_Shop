<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\HistoriessController;

use App\Http\Controllers\HomeController;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix("/products")->name("products.")->group( function () {

    Route::get('', [ProductsController::class, "index"]);
    
    Route::post('/create', [ProductsController::class, "create"]);
    Route::post('/create', [ProductsController::class, "store"]);
    
    Route::get('/edit/{id}', [ProductsController::class, "edit"]); 
    Route::post('/edit/{id}', [ProductsController::class, "update"]);
    
    Route::get('show/{id}', [ProductsController::class, "show"]);
    
    Route::post('/delete/{id}', [ProductsController::class, "delete"]);

});

 Route::get('/carts', [CartsController::class, "index"]);
 Route::post('/delete/{id}', [CartsController::class, "delete"]);


 Route::get('/histories', [HistoriessController::class, "index"]);
