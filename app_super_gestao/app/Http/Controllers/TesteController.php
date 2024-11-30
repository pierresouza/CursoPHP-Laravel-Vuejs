<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($p1, $p2)
    {
        return "A soma de $p1 + $p2 é: " . ($p1 + $p2);
    }
}
