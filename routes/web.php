<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/',[ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    
    Route::get('/{id}', [ProductController::class, 'show'])->name('show');

    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::delete('/{id}', [ProductController::class, 'delete'])->name('delete');
});

Route::resource('categories', CategoryController::class)->only(['index', 'show']);
Route::resource('tags', TagController::class)->only(['index', 'show']);