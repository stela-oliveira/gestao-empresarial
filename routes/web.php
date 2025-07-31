<?php

use Illuminate\Support\Facades\Route;

// Rotas Públicas
Route::get('/', function () {
    return 'Página inicial';
})->name('home');

Route::get('/produtos', function () {
    return 'Lista de produtos';
});

Route::get('/produtos/{id}', function (Int $id){
    echo 'Id do produto: ' . $id;
})->where('id', '[0-9]+');

Route::get('/cadastro', function () {
    return 'Página de cadastro de novo cliente';
});

Route::get('/login', function () {
    return 'Página de login para clientes';
});

Route::get('/sobre', function () {
    return 'Página institucional';
})->name('sobre');

// Rotas privadas
Route::prefix('/admin')->group(function(){
    Route::get('/login', function(){
        echo 'Tela de login do administrador';
    });
    Route::get('/dashboard', function(){
        echo 'Painel principal';
    })->name('admin.dashboard');
    Route::get('/clientes', function(){
        echo 'Lista de clientes';
    });
        Route::get('/clientes/{id?}', function(Int $id){
        echo 'Visualização de um cliente específico';
    });
        Route::get('/fornecedores', function(){
        echo 'Lista de fornecedores';
    });
        Route::get('/produtos', function(){
        echo 'Lista de produtos cadastrados';
    });
        Route::get('/produtos/{slug}', function(){
        echo 'Visualização de um produto por slug';
    })->where('{slug}', '[0-9]+')->where('{slug}', '[a-zA-Z0-9-]+');
});

