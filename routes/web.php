<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;

// rota principal
Route::get('/', [PrincipalController::class, 'index'])->name('principal');

// rota para 'sobre nós'
Route::get('/sobrenos', [SobreNosController::class, 'index'])->name('sobrenos');

// rota para 'contato'
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

// rota para 'login'
Route::get('/login', [LoginController::class, 'index'])->name('login');

// grupo de rotas com prefixo /app
Route::prefix('app')->group(function () {

    Route::get('/clientes', [ClienteController::class, 'index'])
        ->name('app.clientes');

    Route::get('/fornecedores/{nome}/{status}/{categoria}', 
        [FornecedorController::class, 'index']
    )->name('app.fornecedores');

    Route::get('/produtos/{nome?}/{preco?}', 
        [ProdutoController::class, 'index']
    )->name('app.produtos');

});