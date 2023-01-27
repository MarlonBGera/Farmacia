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
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LocalizacaoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\FormaPagamentoController;
use App\Http\Controllers\CaixaController;
use App\Http\Controllers\IcmsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/painel', function () {
    return view('login');
});
Route::get('/clientes', [ClienteController::class, 'index']);
Route::post('/clientes/create', [ClienteController::class, 'store']);

Route::get('/fornecedores', [FornecedorController::class, 'index']);
Route::post('/fornecedores/create', [FornecedorController::class, 'store']);

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::post('/protudos/create', [ProdutoController::class, 'store']);

Route::get('/grupos', [GrupoController::class, 'index']);
Route::post('/grupos/create', [GrupoController::class, 'store']);
Route::get('/grupos/{id}', [GrupoController::class, 'showEdit']);
Route::get('/grupos/edit', [GrupoController::class, 'editarGrupo']);

Route::get('/localizacoes', [LocalizacaoController::class, 'index']);
Route::post('/localizacoes/create', [LocalizacaoController::class, 'store']);

Route::get('/fabricantes', [FabricanteController::class, 'index']);
Route::post('/fabricantes/create', [FabricanteController::class, 'store']);

Route::get('/planos', [PlanoController::class, 'index']);
Route::post('/planos/create', [PlanoController::class, 'store']);

Route::get('/formpags', [FormaPagamentoController::class, 'index']);
Route::post('/formpags/create', [FormaPagamentoController::class, 'store']);

Route::get('/caixas', [CaixaController::class, 'index']);
Route::post('/caixas/create', [CaixaController::class, 'store']);

Route::get('/icms', [IcmsController::class, 'index']);
Route::post('/icms/create', [IcmsController::class, 'store']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
