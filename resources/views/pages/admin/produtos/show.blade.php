@extends('layouts.admin')

@section('title', 'Detalhes do Produto')

@section('content')
    <div class="card p-4">
        <h1>Detalhes do Produto</h1>
        <h2 class="mt-3">Banana verde</h2>
        <p><strong>Preço:</strong> R$ 10,00</p>
        <p><strong>Descrição:</strong> Banana não madura.</p>
        <p><strong>Slug:</strong> {{ $slug ?? 'N/A' }}</p>
        <a href="{{ route('admin.produtos') }}" class="btn btn-warning mt-3">Voltar à lista</a>
    </div>
@endsection