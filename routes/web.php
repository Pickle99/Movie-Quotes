<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\MovieController;
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

Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('movie/{id}', [MovieController::class, 'show'])->name('movie');

Route::get('login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->name('sessions.store')->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('admin', [CrudController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('admin/movies/create', [CrudController::class, 'createMovie'])->name('movie.create')->middleware('auth');
Route::get('admin/movies/{id}', [CrudController::class, 'createQuote'])->name('quote.create')->middleware('auth');
Route::post('admin/movies', [CrudController::class, 'storeMovie'])->name('movie.store')->middleware('auth');
Route::post('admin/{id}', [CrudController::class, 'storeQuote'])->name('quote.store')->middleware('auth');
Route::get('admin/movie/{id}/edit', [CrudController::class, 'editMovie'])->name('movie.edit')->middleware('auth');
Route::patch('admin/movie/{id}', [CrudController::class, 'updateMovie'])->name('movie.update')->middleware('auth');
Route::delete('admin/movie/{id}', [CrudController::class, 'destroyMovie'])->name('movie.destroy')->middleware('auth');
Route::get('admin/quote/{id}/edit', [CrudController::class, 'editQuote'])->name('quote.edit')->middleware('auth');
Route::patch('admin/quote/{id}', [CrudController::class, 'updateQuote'])->name('quote.update')->middleware('auth');
Route::delete('admin/quote/{id}', [CrudController::class, 'destroyQuote'])->name('quote.destroy')->middleware('auth');
Route::get('set-locale/{locale}', [SessionsController::class, 'update'])->name('set.locale')->middleware('check.locale');
