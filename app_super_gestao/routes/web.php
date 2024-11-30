<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
// nome, categoria, assunto, mensagem

Route::get(
    '/contato/{nome}/{categoria_id}', //
    function (
        string $nome = 'Desconhecido',
        int $categoria_id = 1, // 1 = Informação
    ) {
        echo "Estamos aqui: $nome - $categoria_id ";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
