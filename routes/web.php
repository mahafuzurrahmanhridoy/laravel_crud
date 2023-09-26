<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin');

// Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Route::patch('/products/{id}', [ProductController::class, 'update'])->name('products.update');

// Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/products/trash', [ProductController::class, 'trash'])->name('products.trash');
Route::patch('/products/{id}/restore', [ProductController::class, 'restore'])->name('products.restore');
Route::delete('/products/{id}/delete', [ProductController::class, 'delete'])->name('products.delete');
Route::get('/products/download-pdf', [ProductController::class, 'downloadPdf'])->name('products.pdf');
Route::resource('products', ProductController::class);
