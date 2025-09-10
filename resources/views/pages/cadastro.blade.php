@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
    <div class="card p-4">
        <h2 class="card-title text-center">Cadastro</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                <input type="password" class="form-control" id="password_confirmation">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-warning">Cadastrar</button>
            </div>
        </form>
    </div>
@endsection