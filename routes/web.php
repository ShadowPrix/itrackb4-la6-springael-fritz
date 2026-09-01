<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/featured', [MovieController::class, 'featured'])->name('movies.featured');
Route::get('/movies/filter/{value?}', [MovieController::class, 'filter'])->name('movies.filter');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/whoami', function () {
    return 'Fritz C. Springael | 2023-70367 | Block 4C | ITRACKB4 Laravel 12';
});


Route::get('/product', [ProductsController::class, 'index']);
