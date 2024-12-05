<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;

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
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login/auth', [AuthController::class, 'auth'])->name('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/article', [ArtikelController::class, 'index'])->name('article');

    Route::get('/dashboard/article/{id}/edit', [ArtikelController::class, 'edit'])->name('edit.artikel');
    Route::put('/dashboard/article/{id}/update', [ArtikelController::class, 'update'])->name('update_article');
    Route::get('/dashboard/article/create', [ArtikelController::class, 'create'])->name('create_article');
    Route::post('/dashboard/article/post', [ArtikelController::class, 'store'])->name('store_article');
    Route::delete('/dashboard/article/{id}/destroy', [ArtikelController::class, 'destroy'])->name('destroy_article');

    Route::post('/dashboard/logout', [AuthController::class, 'logout'])->name('logout');
});
