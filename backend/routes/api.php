<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::prefix('auth')->group(function(){
    Route::post('register',[RegisterController::class,'register']);
    Route::post('login',[RegisterController::class,'login']);
});
Route::get('products',[ProductController::class,'index']);
Route::post('products/store',[ProductController::class,'store']);
Route::post('product/delete/{id}',[ProductController::class,'destroy']);
Route::get('products/{id}',[ProductController::class,'view']);
Route::post('product/update/{id}',[ProductController::class,'update']);

