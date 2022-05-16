@extends('app')
@section('titulo', 'Detalhes do Cliente')
@section('conteudo')
<div class="card">
  <div class="card-header">
    Destaque
  </div>
  <div class="card-body">
    <h5 class="card-title">Detalhes do Cliente {{$client->name}}</h5>
    <p><strong> Nome: </strong> {{$client->name}}</p>
    <p><strong> Endereço: </strong> {{$client->endereco}}</p>
    <p><strong> Observaçao: </strong> {{$client->observacao}}</p>
    <br>
    <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar para lista</a>
  </div>
</div>
  
@endsection
