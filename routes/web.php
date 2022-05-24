<?php

use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Admin\QuoteController as AdminQuoteController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [QuoteController::class, 'index'])->name('home');
Route::get('movie/{movie}', [MovieController::class, 'show'])->name('movie');

Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('auth', [AuthController::class, 'auth'])->name('auth')->middleware('guest');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('admin')->middleware('admin')->group(function () {
	Route::get('/', [AdminMovieController::class, 'index'])->name('movies.index');
	Route::get('movies/create', [AdminMovieController::class, 'create'])->name('movies.create');
	Route::post('movies', [AdminMovieController::class, 'store'])->name('movies.store');
	Route::get('movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('movies.edit');
	Route::patch('{movie}/movies', [AdminMovieController::class, 'update'])->name('movies.update');
	Route::delete('{movie}/movies', [AdminMovieController::class, 'destroy'])->name('movies.destroy');

	Route::get('movies/{movie}/quotes', [AdminQuoteController::class, 'index'])->name('quotes.index');
	Route::get('movies/{movie}/quotes/create', [AdminQuoteController::class, 'create'])->name('quotes.create');
	Route::post('movies/{movie}/quotes', [AdminQuoteController::class, 'store'])->name('quotes.store');
	Route::get('quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('quotes.edit');
	Route::patch('{quote}/quotes', [AdminQuoteController::class, 'update'])->name('quotes.update');
	Route::delete('{quote}/quotes', [AdminQuoteController::class, 'destroy'])->name('quotes.destroy');
});

Route::get('set-locale/{locale}', [LanguageController::class, 'locale'])->name('set.locale');
