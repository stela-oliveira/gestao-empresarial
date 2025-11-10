@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
<div class="container my-5">
    <h2>Nossos Produtos</h2>
    
    {{-- para verifica se há produtos antes de começar o loop --}}
    @if ($produtos->isEmpty())
        <div class="alert alert-info mt-4" role="alert">
            Nenhum produto cadastrado no momento.
        </div>
    @else
        @foreach ($produtos as $produto)
            <div class="card p-4 mb-4 shadow-sm">
                <div class="row align-items-center">
                    
                    <div class="col-md-4 col-lg-3 text-center">
                        @if ($produto->imagem)
                            {{-- Storage::url() para acessar a imagem salva no storage/app/public --}}
                            <img src="{{ Storage::url($produto->imagem) }}" class="img-fluid rounded shadow-sm" alt="Imagem do Produto {{ $produto->nome }}" style="max-height: 150px; object-fit: cover;">
                        @else
                            {{-- placeholder caso o produto não tenha imagem --}}
                            <img src="{{ asset('images/placeholder.png') }}" class="img-fluid rounded" alt="Sem Imagem" style="max-height: 150px; object-fit: cover;">
                        @endif
                    </div>
                    
                    <div class="col-md-8 col-lg-9">
                        <h1 class="mt-3 mt-md-0">{{ $produto->nome }}</h1>
                        
                        {{-- Str::limit para limitar a descrição --}}
                        <p class="lead text-muted">{{ Str::limit($produto->descricao, 80) }}</p>
                        
                        <h3 class="text-success mb-3">
                            R$ {{ number_format($produto->preco, 2, ',', '.') }}
                        </h3>
                        
                        <a href="{{ route('produtos.show', ['produto' => $produto->id]) }}" class="btn btn-warning">
                            Ver Detalhes
                        </a>
                        
                        <button class="btn btn-warning">Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection