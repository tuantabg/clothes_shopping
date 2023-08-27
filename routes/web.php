<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\Client\HomeController;


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

Route::get('/', [HomeController::class , 'index']);


Route::prefix('/shop')->group(function () {
    Route::get('', [ShopController::class, 'index']);
    Route::get('/product/{id}', [ShopController::class, 'show']);
    Route::post('/product/{id}', [ShopController::class, 'postComment']);
});

