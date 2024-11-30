<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function () {
    return 'Login';
});

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

// Route::get(
//     '/contato/{nome}/{categoria_id}', //
//     function (
//         string $nome = 'Desconhecido',
//         int $categoria_id = 1, // 1 = Informação
//     ) {
//         echo "Estamos aqui: $nome - $categoria_id ";
//     }
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
