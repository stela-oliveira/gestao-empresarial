@extends('layouts.admin') 

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-warning shadow-warning border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h4 class="text-black text-capitalize ps-3 mb-0">Lista de Produtos</h4>
                        <a href="{{ route('admin.produtos.create') }}" class="btn btn-light me-3 mb-1">
                            Adicionar Produto
                        </a>
                    </div>
                </div>
                
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table table-striped table-hover align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">#</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preço</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Visualizar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $produto)
                                <tr>
                                    <td class="align-middle ps-3"><p class="text-xs font-weight-bold mb-0">{{ $produto->id }}</p></td>
                                    
                                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0">{{ $produto->nome }}</p></td>

                                    <td class="align-middle"><p class="text-xs text-secondary mb-0">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p></td>
                                    
                                    <td class="align-middle">
                                        <a href="{{ route('admin.produtoDetalhe', ['id' => $produto->id]) }}" class="btn btn-sm btn-warning text-white">
                                            Detalhes
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        @if ($produtos->isEmpty())
                            <p class="text-center mt-3">Nenhum produto cadastrado.</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection