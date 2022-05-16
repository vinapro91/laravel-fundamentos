@extends('app')
@section('titulo', 'Lista de Clientes')
@section('conteudo')
      <h1>  Lista de Clientes</h1>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
          </tr>
        </thead>
        <tbody>
          @foreach($clients as $client)
            <tr>
              <th scope="row">{{ $client->id }}</th>
              <td><a href="{{ route('clients.show', $client) }}">{{ $client->name }}</a></td>
              <td>{{ $client->endereco }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">Novo Cliente</a>
@endsection