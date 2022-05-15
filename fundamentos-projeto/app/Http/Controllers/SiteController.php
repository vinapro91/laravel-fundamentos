<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{

    /**
     * mostra a página inicial
     *
     * @return void
     */
    public function index()
    {
        echo "conteudo index";
        // return view('welcome');
    }

    /**
     * mostra a página sobre
     *
     * @return void
     */
    public function sobre()
    {
        echo "conteudo sobre";
        // return view('sobre');
    }

    /**
     * mostra a página contato
     *
     * @return void
     */
    public function contato()
    {
        echo "conteudo contato";
        // return view('contato');
    }

    /**
     * mostra a página servicos
     *
     * @return void
     */
    public function servicos()
    {
        echo "conteudo servicos";
        // return view('servicos');
    }

    /**
     * mostra a página servico
     *
     * @return void
     */
    public function servico(int $id)
    {
        $servicos = [
            1=> [
             "nome" => 'Lavagem de coberta',
             "preco" => 'R$ 50,00',
             "descricao" => 'Lavagem de coberta'
             ],
             2=> [
                 "nome" => 'Lavagem de roupa',
                 "preco" => 'R$ 30,00',
                 "descricao" => 'Lavagem de roupa'
             ],
             3=> [
                 "nome" => 'Lavagem de tenis',
                 "preco" => 'R$ 20,00',
                 "descricao" => 'Lavagem de tenis'
             ],
         ];
     
         echo $servicos[$id]['nome'];
        // return view('servico');
    }
    
    
}
