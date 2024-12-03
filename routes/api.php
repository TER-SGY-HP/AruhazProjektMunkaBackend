<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();


})->middleware('auth:sanctum');
Route::get('/product', function (Request $request) {
    return $request->product();

    
})->middleware('auth:sanctum');
Route::get('/products', [ProductController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/postData', [ProductController::class, 'store']);
Route::delete('/deleteData/{id}', [ProductController::class, 'destroy']);
