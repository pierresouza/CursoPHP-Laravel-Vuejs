<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function () { return 'Login';});

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () { return 'Clientes';})->name('app.clientes');
    // Route::get('/fornecedores', function () { return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'fornecedor'])->name('app.fornecedores');
    Route::get('/produtos', function () {return 'Produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

Route::get('/rota2', function () {return redirect()->route('site.rota1');})->name('site.rota2');


Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para a página inicial';
});
