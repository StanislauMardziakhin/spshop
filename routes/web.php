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
