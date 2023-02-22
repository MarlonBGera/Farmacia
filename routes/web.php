<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

// Começando a fazer a chamada de login com autenticação.
Route::get('/', [AuthController::class, 'index'])->name('TelaLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/painel', [AuthController::class, 'show'])->name('painel');


Route::get('/cliente/{id}', [ClienteController::class, 'show']);
