<?php

use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return redirect()->route('products.index');
// })->name('home');

// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
// Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
// Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
// Route::get('/transactions/{transaction}', [TransactionController::class, 'show'])->name('transactions.show');



Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{tyunit}', [ItemController::class, 'show']);