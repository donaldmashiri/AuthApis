<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login', [LoginController::class, 'login']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);

Route::post('/register', [LoginController::class, 'register']);

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

Route::resource('products', ProductController::class);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();


});

