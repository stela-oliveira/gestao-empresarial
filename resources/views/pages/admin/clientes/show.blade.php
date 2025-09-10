@extends('layouts.admin')

@section('title', 'Detalhes do Cliente')

@section('content')
    <div class="card p-4">
        <h1>Detalhes do Cliente</h1>
        <h2 class="mt-3">Nome: Stela de Oliveira</h2>
        <p><strong>Email:</strong> stela.oliveira@email.com</p>
        <p><strong>ID do Cliente:</strong> {{ $id ?? 'N/A' }}</p>
        <a href="{{ route('admin.clientes') }}" class="btn btn-warning mt-3">Voltar à lista</a>
    </div>
@endsection