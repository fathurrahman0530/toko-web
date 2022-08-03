<?php

use App\Http\Controllers\ProductApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductApiController::class, 'index']);
Route::get('/product/create', [ProductApiController::class, 'create']);
Route::post('/products', [ProductApiController::class, 'store']);
Route::get('/product/{id}', [ProductApiController::class, 'show']);
Route::put('/product/{id}', [ProductApiController::class, 'update']);
Route::delete('/product/{id}', [ProductApiController::class, 'destroy']);
