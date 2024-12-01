<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function fornecedor()
    {
        return view('app.fornecedor.index');
    }
}
