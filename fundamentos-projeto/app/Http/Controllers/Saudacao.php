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
        // return view('saudacao', [
        //     'nome' => $nome,
        // ]);

        // return view('saudacao', compact('nome'));
        
        return view('saudacao')->with('nome', $nome);
    }
}