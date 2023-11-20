<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view("home", [
        "title" => "Home"
    ]);
});

Route::get('/about', [AboutController::class, 'index']);

Route::get("/product/all", [ProductController::class, 'index']);  
Route::get('/product/detail/{product}', [ProductController::class, 'show']); 

Route::get("/food/all", [FoodController::class, 'index']);   
Route::get('/food/detail/{food}', [FoodController::class, 'show']); 

Route::get("/transaction/all", [TransactionController::class, 'index']);   
Route::get('/transaction/detail/{transaction}', [TransactionController::class, 'show']);