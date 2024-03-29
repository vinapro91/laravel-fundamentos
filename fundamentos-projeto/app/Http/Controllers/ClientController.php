<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() 
    {
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function show($id) 
    {
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    public function create() 
    {
        return view('clients.create');
    }

    public function store(Request $request) 
    {
        $client = new Client();
        $client->name = $request->name;
        $client->endereco = $request->endereco;
        $client->observacao = $request->observacao;
        $client->save();

        return redirect()->route('clients.index');
        // return redirect('/clients');
    }

    public function edit(int $id) {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }

    public function update(Request $request, int $id) {
        $client = Client::find($id);
        $client->name = $request->name;
        $client->endereco = $request->endereco;
        $client->observacao = $request->observacao;
        $client->save();

        return redirect()->route('clients.index');
        return redirect('/clients');
    }

    public function destroy(int $id) {
        $client = Client::find($id);
        $client->delete();

        return redirect()->route('clients.index');
        // return redirect('/clients');
    }
}
