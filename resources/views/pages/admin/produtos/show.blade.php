@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            {{-- usando Storage::url() para acessar a imagem salva no storage/app/public --}}
                            @if ($produto->imagem)
                                <img src="{{ Storage::url($produto->imagem) }}" class="img-fluid rounded shadow-sm" alt="Imagem do Produto {{ $produto->nome }}">
                            @else
                                <img src="{{ asset('images/placeholder.png') }}" class="img-fluid rounded shadow-sm" alt="Sem Imagem">
                            @endif
                        </div>
                        <div class="col-md-7">
                            <h1 class="card-title">{{ $produto->nome }}</h1>
                            <p class="lead text-success">
                                {{-- formatação do preço para real br --}}
                                Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}
                            </p>
                            
                            <hr>
                            
                            <h5 class="mt-4">Descrição do Produto</h5>
                            <p class="card-text">{{ $produto->descricao }}</p>

                            <hr>

                            <a href="{{ route('admin.produtos') }}" class="btn btn-warning">Voltar à lista</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection