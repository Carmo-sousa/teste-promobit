<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])
                ->middleware('auth')
                ->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])
                ->middleware('auth')
                ->name('products.create');

Route::post('/products/store', [ProductController::class, 'store'])
                ->middleware('auth')
                ->name('products.store');

Route::get('/products/{id}/edit', [ProductController::class, 'edit'])
                ->middleware('auth')
                ->name('products.edit');

Route::post('/products/{id}/update', [ProductController::class, 'update'])
                ->middleware('auth')
                ->name('products.update');

Route::get('/products/{id}/delete', [ProductController::class, 'destroy'])
                ->middleware('auth')
                ->name('products.delete');
?>
