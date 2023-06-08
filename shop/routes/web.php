<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'categories'], function (){
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
    Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
    Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
    Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
    Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
    Route::delete('/{category}', \App\Http\Controllers\Category\DeleteController::class)->name('category.delete');
});


Route::group(['prefix' => 'tags'], function () {
    Route::get('/', \App\Http\Controllers\Tag\IndexController::class)->name('tag.index');
    Route::get('/create', \App\Http\Controllers\Tag\CreateController::class)->name('tag.create');
    Route::post('/', \App\Http\Controllers\Tag\StoreController::class)->name('tag.store');
    Route::get('/{tag}', \App\Http\Controllers\Tag\ShowController::class)->name('tag.show');
    Route::get('/{tag}/edit', \App\Http\Controllers\Tag\EditController::class)->name('tag.edit');
    Route::patch('/{tag}', \App\Http\Controllers\Tag\UpdateController::class)->name('tag.update');
    Route::delete('/{tag}', \App\Http\Controllers\Tag\DeleteController::class)->name('tag.delete');
});

Route::group(['prefix' => 'colors'], function () {
    Route::get('/', \App\Http\Controllers\Color\IndexController::class)->name('color.index');
    Route::get('/create', \App\Http\Controllers\Color\CreateController::class)->name('color.create');
    Route::post('/', \App\Http\Controllers\Color\StoreController::class)->name('color.store');
    Route::get('/{color}', \App\Http\Controllers\Color\ShowController::class)->name('color.show');
    Route::get('/{color}/edit', \App\Http\Controllers\Color\EditController::class)->name('color.edit');
    Route::patch('/{color}', \App\Http\Controllers\Color\UpdateController::class)->name('color.update');
    Route::delete('/{color}', \App\Http\Controllers\Color\DeleteController::class)->name('color.delete');
});


Route::group(['prefix' => 'users'], function () {
    Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('user.index');
    Route::get('/create', \App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::post('/', \App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::get('/{user}', \App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::get('/{user}/edit', \App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::patch('/{user}', \App\Http\Controllers\User\UpdateController::class)->name('user.update');
    Route::delete('/{user}', \App\Http\Controllers\User\DeleteController::class)->name('user.delete');

    Route::group(['prefix' => '{user}/sellers'], function () {
        Route::get('/create', \App\Http\Controllers\User\Seller\CreateController::class)->name('user.seller.create');
        Route::post('/', \App\Http\Controllers\User\Seller\StoreController::class)->name('user.seller.store');
        Route::get('/{seller}', \App\Http\Controllers\User\Seller\ShowController::class)->name('user.seller.show');
        Route::get('/{seller}/edit', \App\Http\Controllers\User\Seller\EditController::class)->name('user.seller.edit');
        Route::patch('/{seller}', \App\Http\Controllers\User\Seller\UpdateController::class)->name('user.seller.update');
        Route::delete('/{seller}', \App\Http\Controllers\User\Seller\DeleteController::class)->name('user.seller.delete');
    });

    Route::group(['prefix' => '{user}/buyers'], function () {
        Route::get('/create', \App\Http\Controllers\User\Buyer\CreateController::class)->name('user.buyer.create');
        Route::post('/', \App\Http\Controllers\User\Buyer\StoreController::class)->name('user.buyer.store');
        Route::get('/{buyer}', \App\Http\Controllers\User\Buyer\ShowController::class)->name('user.buyer.show');
        Route::get('/{buyer}/edit', \App\Http\Controllers\User\Buyer\EditController::class)->name('user.buyer.edit');
        Route::patch('/{buyer}', \App\Http\Controllers\User\Buyer\UpdateController::class)->name('user.buyer.update');
        Route::delete('/{buyer}', \App\Http\Controllers\User\Buyer\DeleteController::class)->name('user.buyer.delete');
    });
});


Route::group(['prefix' => 'items'], function () {
    Route::get('/', \App\Http\Controllers\Item\IndexController::class)->name('item.index');
    Route::get('/create', \App\Http\Controllers\Item\CreateController::class)->name('item.create');
    Route::post('/', \App\Http\Controllers\Item\StoreController::class)->name('item.store');
    Route::get('/{item}', \App\Http\Controllers\Item\ShowController::class)->name('item.show');
    Route::get('/{item}/edit', \App\Http\Controllers\Item\EditController::class)->name('item.edit');
    Route::patch('/{item}', \App\Http\Controllers\Item\UpdateController::class)->name('item.update');
    Route::delete('/{item}', \App\Http\Controllers\Item\DeleteController::class)->name('item.delete');
});








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
