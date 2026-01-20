<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sesi', [SessionController::class, 'index'])->name('login');
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/users/{id}/edit', [AdminController::class, 'edit'])->middleware('auth');
Route::put('/admin/users/{id}', [AdminController::class, 'update'])->middleware('auth');
Route::delete('/admin/users/{id}', [AdminController::class, 'destroy'])->middleware('auth');

Route::get('/user', [UserController::class, 'index'])->middleware('auth');
