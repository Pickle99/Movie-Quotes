<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SessionsController;
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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('movie/{id}', [MainController::class, 'show'])->name('movie');

Route::get('login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->name('sessions.store')->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('admin', [MovieController::class, 'index'])->name('admin.index')->middleware('admin');
Route::get('admin/movies/create', [MovieController::class, 'create'])->name('movie.create')->middleware('admin');
Route::post('admin/movies', [MovieController::class, 'store'])->name('movie.store')->middleware('admin');
Route::get('admin/movie/{id}/edit', [MovieController::class, 'edit'])->name('movie.edit')->middleware('admin');
Route::patch('admin/movie/{id}', [MovieController::class, 'update'])->name('movie.update')->middleware('admin');
Route::delete('admin/movie/{id}', [MovieController::class, 'destroy'])->name('movie.destroy')->middleware('admin');

Route::get('admin/quotes/{id}', [QuoteController::class, 'index'])->name('quotes.index')->middleware('admin');
Route::get('admin/movies/{id}', [QuoteController::class, 'create'])->name('quote.create')->middleware('admin');
Route::post('admin/{id}', [QuoteController::class, 'store'])->name('quote.store')->middleware('admin');
Route::get('admin/quote/{id}/edit', [QuoteController::class, 'edit'])->name('quote.edit')->middleware('admin');
Route::patch('admin/quote/{id}', [QuoteController::class, 'update'])->name('quote.update')->middleware('admin');
Route::delete('admin/quote/{id}', [QuoteController::class, 'destroy'])->name('quote.destroy')->middleware('admin');

Route::get('set-locale/{locale}', [SessionsController::class, 'update'])->name('set.locale')->middleware('check.locale');
