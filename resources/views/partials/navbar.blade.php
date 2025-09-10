<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f8da76ff;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Gestão Empresarial</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cadastro') }}">Cadastro</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-warning" href="{{ route('admin.login') }}">Acesso Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>