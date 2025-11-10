@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-warning shadow-warning border-radius-lg pt-4 pb-3">
                        <h4 class="text-black text-capitalize ps-3 mb-0">Lista de Clientes</h4>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table table-striped table-hover align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome Completo</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CPF / Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Endereço</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                <tr>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $cliente->id }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $cliente->nome }} {{ $cliente->sobrenome }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{ $cliente->cpf }}</p>
                                        <p class="text-xs text-secondary mb-0">{{ $cliente->email }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{ $cliente->logradouro }}</p>
                                        <p class="text-xs text-secondary mb-0">{{ $cliente->cidade }} - {{ $cliente->uf }}</p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('admin.clienteDetalhe', ['id' => $cliente->id]) }}" class="text-warning font-weight-bold text-xs">
                                            Detalhes
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection