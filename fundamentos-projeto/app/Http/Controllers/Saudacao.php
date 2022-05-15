<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
    /**
     * mostra a página saudacao
     *
     * @return void
     */
    public function __invoke(string $nome = null)
    {
        echo "olá {$nome}";
    }
}
