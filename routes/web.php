<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'types'], function (){
    Route::get('/', \App\Http\Controllers\Type\IndexController::class)->name('type.index');
    Route::get('/create', \App\Http\Controllers\Type\CreateController::class)->name('type.create');
    Route::post('/', \App\Http\Controllers\Type\StoreController::class)->name('type.store');
    Route::get('/{type}/edit', \App\Http\Controllers\Type\EditController::class)->name('type.edit');
    Route::get('/{type}', \App\Http\Controllers\Type\ShowController::class)->name('type.show');
    Route::patch('/{type}', \App\Http\Controllers\Type\UpdateController::class)->name('type.update');
    Route::delete('/{type}', \App\Http\Controllers\Type\DeleteController::class)->name('type.delete');
});

Route::group(['prefix' => 'users'], function (){
    Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('user.index');
    Route::get('/create', \App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::post('/', \App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::get('/{user}/edit', \App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::get('/{user}', \App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::patch('/{user}', \App\Http\Controllers\User\UpdateController::class)->name('user.update');
    Route::delete('/{user}', \App\Http\Controllers\User\DeleteController::class)->name('user.delete');
});

Route::group(['prefix' => 'products'], function (){
    Route::get('/', \App\Http\Controllers\Product\IndexController::class)->name('product.index');
    Route::get('/create', \App\Http\Controllers\Product\CreateController::class)->name('product.create');
    Route::post('/', \App\Http\Controllers\Product\StoreController::class)->name('product.store');
    Route::get('/{product}/edit', \App\Http\Controllers\Product\EditController::class)->name('product.edit');
    Route::get('/{product}', \App\Http\Controllers\Product\ShowController::class)->name('product.show');
    Route::patch('/{product}', \App\Http\Controllers\Product\UpdateController::class)->name('product.update');
    Route::delete('/{product}', \App\Http\Controllers\Product\DeleteController::class)->name('product.delete');
});

