<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/items', \App\Http\Controllers\API\Item\IndexController::class);
Route::post('/orders', \App\Http\Controllers\API\Order\StoreController::class);
Route::get('/items/filters', \App\Http\Controllers\API\Item\FilterListController::class);
Route::get('/items/{item}', \App\Http\Controllers\API\Item\ShowController::class);
