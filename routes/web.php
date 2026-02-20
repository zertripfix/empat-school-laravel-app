<?php

use App\Http\Controllers\ProductController;
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
