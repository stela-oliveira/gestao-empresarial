<div class="card" style="width: 18rem;">
    <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Imagem do Produto">
    <div class="card-body">
        <h5 class="card-title">{{ $nome }}</h5>
        <p class="card-text">{{ $descricao }}</p>
        <a href="{{ route('produtos.show', $id) }}" class="btn btn-primary">Ver Detalhes</a>
    </div>
</div>