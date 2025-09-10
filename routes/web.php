<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

//Rotas Públicas
Route::get('/', [HomeController::class, 
'index'])->name('home');
Route::get('/sobre', [HomeController::class,
'sobre'])->name('sobre');
Route::resource('produtos', ProdutoController::class)
->only(['index', 'show']);
Route::get('/cadastro', [HomeController::class,
'cadastro'])->name('cadastro');
Route::get('/login', [HomeController::class,
'login'])->name('login');


//Rotas Privadas (Área Administrativa)
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/clientes', [AdminController::class, 'clientesIndex'])->name('admin.clientes');
    Route::get('/clientes/{id}', [AdminController::class, 'clientesShow'])->name('admin.clienteDetalhe');
    Route::get('/fornecedores', [AdminController::class, 'fornecedores'])->name('admin.fornecedores');
    Route::get('/produtos', [AdminController::class, 'produtos'])->name('admin.produtos');
    Route::get('/produtos/{slug}', [AdminController::class, 'produtosShow'])->name('admin.produtoDetalhe');
});