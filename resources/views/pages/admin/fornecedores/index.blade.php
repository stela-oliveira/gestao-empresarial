@extends('layouts.admin')

@section('title', 'Fornecedores')

@section('content')
    <h1>Lista de Fornecedores</h1>
    <p class="lead">Gerencie todos os fornecedores do sistema.</p>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome da Empresa</th>
                <th scope="col">Contato</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Leandro Bona</td>
                <td>leandro@fornecedor.com</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>João pedro</td>
                <td>joao@fornecedor.com</td>
            </tr>
        </tbody>
    </table>
@endsection