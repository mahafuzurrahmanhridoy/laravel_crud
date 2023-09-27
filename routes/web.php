<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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


Route::resource('products', ProductController::class);
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

Route::patch('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');






// Route::resource('categories', CategoryController::class);
