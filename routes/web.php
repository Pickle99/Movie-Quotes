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
Route::get('admin', [CrudController::class, 'index'])->name('admin.show')->middleware('auth');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('admin/movies/create', [CrudController::class, 'create'])->middleware('auth');
Route::post('admin/movies', [CrudController::class, 'store'])->middleware('auth');
