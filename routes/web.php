<?php

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

Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('home.login');

Route::get('/cadastro', [App\Http\Controllers\UserController::class, 'signup'])->name('home.register');

Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');

Route::post('/register', [App\Http\Controllers\UserController::class, 'register'])->name('register');

Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::get('/dash', [App\Http\Controllers\Controller::class, 'renderDash'])->name('dashboard');