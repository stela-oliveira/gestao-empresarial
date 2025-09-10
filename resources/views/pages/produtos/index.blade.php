@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
    <h2>Nossos Produtos</h2>
    <div class="card p-4">
        <div class="row">
            <div class="col-md-6">
                <img src="https://alimentos.com.br/wp-content/uploads/2018/08/px_banana-nanica_1025109_1280.jpg" class="img-fluid" alt="Imagem do Produto">
            </div>
            <div class="col-md-6">
                <h1>Penca de banana</h1>
                <p class="lead">amarela e docinha.</p>
                <h3>R$ 5,99</h3>
                <button class="btn btn-warning btn-lg">Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>
    <div class="card p-4">
        <div class="row">
            <div class="col-md-6">
                <img src="https://img.freepik.com/vetores-premium/ilustracao-em-vetor-de-uma-banana-amarela-brilhante-detalhada-isolada-frutas-fotorrealistas_581175-630.jpg" class="img-fluid" alt="Imagem do Produto">
            </div>
            <div class="col-md-6">
                <h1>Uma banana</h1>
                <p class="lead">para uma pessoa.</p>
                <h3>R$ 1,99</h3>
                <button class="btn btn-warning btn-lg">Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>
    <div class="card p-4">
        <div class="row">
            <div class="col-md-6">
                <img src="https://static.itdg.com.br/images/640-auto/83f8711b9cd9786354d8f0b6f6d471f1/shutterstock-244685272.jpg" class="img-fluid" alt="Imagem do Produto">
            </div>
            <div class="col-md-6">
                <h1>Banana cortada</h1>
                <p class="lead">prática e saborosa.</p>
                <h3>R$ 2,99</h3>
                <button class="btn btn-warning btn-lg">Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>
    <div class="card p-4">
        <div class="row">
            <div class="col-md-6">
                <img src="https://admin.cnnbrasil.com.br/wp-content/uploads/sites/12/2023/06/quantas-bananas-pode-comer.jpg?w=1024" class="img-fluid" alt="Imagem do Produto">
            </div>
            <div class="col-md-6">
                <h1>Muitas bananas</h1>
                <p class="lead">para bastante pessoas.</p>
                <h3>R$ 19,99</h3>
                <button class="btn btn-warning btn-lg">Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>
@endsection