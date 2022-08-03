<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
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
Route::get('/', function () {
    return view('index');
});


    // MAIN MENU API'S
Route::get('/menu/list', [MenuController::class, 'index']);
Route::get('/menu', [MenuController::class, 'menuById']);

    // PRODUCT API'S
Route::get('/product/list', [ProductController::class, 'index']);
Route::get('/product/detailsById', [ProductController::class, 'getDetailsByProducId']);

// PRODUCT SEARCH API'S
Route::get('/searchByName', [MenuController::class, 'searchByName']);