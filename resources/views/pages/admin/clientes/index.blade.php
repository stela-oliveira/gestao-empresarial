@extends('layouts.admin')

@section('title', 'Clientes')

@section('content')
    <h1>Lista de Clientes</h1>
    <p class="lead">Gerencie todos os clientes cadastrados no sistema.</p>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-warning my-3">Adicionar Cliente</a>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Nayara Lopes Marx</td>
                <td>nay.lopes@email.com</td>
                <td><a href="{{ route('admin.clienteDetalhe', ['id' => 1]) }}" class="btn btn-warning btn-sm">Detalhes</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Pedro Henrique</td>
                <td>pedro.henrique@email.com</td>
                <td><a href="{{ route('admin.clienteDetalhe', ['id' => 2]) }}" class="btn btn-warning btn-sm">Detalhes</a></td>
            </tr>
        </tbody>
    </table>
@endsection