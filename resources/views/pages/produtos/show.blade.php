@extends('layouts.app')

@section('title', 'Detalhes do Produto')

@section('content')
    <div class="card p-4">
        <div class="row">
            <div class="col-md-6">
                <img src="https://plus.unsplash.com/premium_photo-1724250081106-4bb1be9bf950?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y2FjaG8lMjBkZSUyMGJhbmFuYXxlbnwwfHwwfHx8MA%3D%3D" class="img-fluid" alt="Imagem do Produto">
            </div>
            <div class="col-md-6">
                <h1>banana</h1>
                <p class="lead">Penca de banana.</p>
                <h3>R$ 99,99</h3>
                <button class="btn btn-warning btn-lg">Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>
@endsection