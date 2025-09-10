@extends('layouts.app')

@section('title', 'Bem-vindo à Gestão Empresarial')

@section('content')
    <div class="jumbotron text-center py-5">
        <h1 class="display-4 text-dark mb-4">Bem-vindo à Gestão Empresarial</h1>
        <p class="lead text-muted">Sua solução completa para uma gestão eficiente e saborosa. Explore nosso mundo de possibilidades!</p>
        <hr class="my-4" style="border-color: #ffde54;">
        <p class="text-dark">Descubra como podemos ajudar seu negócio a crescer, com produtos frescos e serviços de alta qualidade.
            Não perca nossas ofertas especiais em **bananas selecionadas**.</p>
        <a class="btn btn-warning btn-lg mt-3" href="{{ route('produtos.index') }}" role="button">Ver Nossas Bananas</a>
    </div>

    <div class="row text-center mt-5">
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="https://images.unsplash.com/photo-1603833665858-e61d17a86224?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded-top" alt="Cacho de Bananas">
                <div class="card-body">
                    <h5 class="card-title text-dark">Bananas Frescas</h5>
                    <p class="card-text text-muted">Colhidas com carinho e entregues na sua porta.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="https://images.unsplash.com/photo-1603833665858-e61d17a86224?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded-top" alt="Cacho de Bananas">
                <div class="card-body">
                    <h5 class="card-title text-dark">Sabor Inigualável</h5>
                    <p class="card-text text-muted">A doçura e a textura que você só encontra aqui.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="https://images.unsplash.com/photo-1603833665858-e61d17a86224?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded-top" alt="Cacho de Bananas">
                <div class="card-body">
                    <h5 class="card-title text-dark">Variedade e Qualidade</h5>
                    <p class="card-text text-muted">As melhores frutas para sua alimentação e seu negócio.</p>
                </div>
            </div>
        </div>
    </div>
@endsection