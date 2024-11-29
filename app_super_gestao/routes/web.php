<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Seja Bem-vindo ao curso de PHP";
});
Route::get('/sobre-nos', function () {
    return "Sobre nós";
});
Route::get('/contato', function () {
    return "Contato";
});
