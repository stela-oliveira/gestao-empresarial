@extends('layouts.admin')

@section('title', 'Admin Produtos')

@section('content')
    <h1>Lista de Produtos</h1>
    <p class="lead">Gerencie todos os produtos do estoque.</p>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-warning my-3">Adicionar Produto</a>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Banana amarela</td>
                <td>R$ 10,00</td>
                <td><a href="{{ route('admin.produtoDetalhe', ['slug' => 'produto-x']) }}" class="btn btn-warning btn-sm">Detalhes</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Banana verde</td>
                <td>R$ 25,00</td>
                <td><a href="{{ route('admin.produtoDetalhe', ['slug' => 'produto-y']) }}" class="btn btn-warning btn-sm">Detalhes</a></td>
            </tr>
        </tbody>
    </table>
@endsection