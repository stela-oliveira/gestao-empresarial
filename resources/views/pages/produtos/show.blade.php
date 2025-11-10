@extends('layouts.app') 

@section('title', 'Detalhes do Produto')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center">
                            @if ($produto->imagem)
                                {{-- Usa Storage::url() para acessar a imagem salva --}}
                                <img src="{{ Storage::url($produto->imagem) }}" class="img-fluid rounded shadow-sm" alt="Imagem do Produto {{ $produto->nome }}">
                            @else
                                <img src="{{ asset('images/placeholder.png') }}" class="img-fluid rounded shadow-sm" alt="Sem Imagem">
                            @endif
                        </div>
                        <div class="col-md-7">
                            <h1 class="card-title">{{ $produto->nome }}</h1>
                            <p class="lead text-success">
                                **Preço:** R$ {{ number_format($produto->preco, 2, ',', '.') }}
                            </p>
                            
                            <hr>
                            
                            <h5 class="mt-4">Descrição do Produto</h5>
                            <p class="card-text">{{ $produto->descricao }}</p>

                            <hr>

                            <a href="{{ route('produtos.index') }}" class="btn btn-warning mt-3">Voltar à lista</a>
                            <button class="btn btn-warning mt-3">Comprar Agora</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection