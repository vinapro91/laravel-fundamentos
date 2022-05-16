@extends('app')
@section('titulo', 'Lista de Clientes')
@section('conteudo')
<h1>  Novo Cliente</h1>

<form action="{{ route('clients.store') }}" method="POST">
@csrf
<div class="form-group">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
</div>
<div class="form-group">
    <label for="endereco" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
</div>
<div class="form-group">
<label for="observacao" class="form-label">Observação</label>
    <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite a Observação" required></textarea>
</div>

<button class="btn btn-success" type="submit">Enviar</button>       
</form>

@endsection