<?php
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/tags', [TagController::class, 'index'])
                ->middleware('auth')
                ->name('tags.index');

Route::get('/tags/create', [TagController::class, 'create'])
                ->middleware('auth')
                ->name('tags.create');

Route::post('/tags/store', [TagController::class, 'store'])
                ->middleware('auth')
                ->name('tags.store');

Route::get('/tags/{id}/edit', [TagController::class, 'edit'])
                ->middleware('auth')
                ->name('tags.edit');

Route::post('/tags/{id}/update', [TagController::class, 'update'])
                ->middleware('auth')
                ->name('tags.update');

Route::get('/tags/{id}/delete', [TagController::class, 'destroy'])
                ->middleware('auth')
                ->name('tags.delete');
?>
