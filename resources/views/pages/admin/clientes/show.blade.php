@extends('layouts.admin')

@section('title', 'Detalhes do Cliente')

@section('content')
<div class="card p-4">
    <div class="card-body">
        
        <h1>Detalhes do Cliente</h1>
        
        <h2 class="mt-3">
            Nome: {{ $cliente->nome }} {{ $cliente->sobrenome }}
        </h2>
        
        <p><strong>ID do Cliente:</strong> {{ $cliente->id }}</p>
        
        <p><strong>Email:</strong> {{ $cliente->email }}</p>
        
        <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
        
        <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
        
        <h5 class="mt-4">Endereço</h5>
        <p>
            {{ $cliente->logradouro }}, {{ $cliente->numero }} <br>
            {{ $cliente->bairro }} - {{ $cliente->cidade }} / {{ $cliente->uf }} <br>
            CEP: {{ $cliente->cep }}
        </p>

        <a href="{{ route('admin.clientes') }}" class="btn btn-warning mt-3">Voltar à lista</a>
        
    </div>
</div>
@endsection